<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Stripe\Checkout\Session as StripeSession;
use App\Models\UserCourse;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $course = Course::findOrFail($request->course_id);
        // dd($course->course_title);
        $checkoutSession = StripeSession::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $course->course_title,
                    ],
                    'unit_amount' => $course->course_price * 100, // Stripe expects amount in cents
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success', ['course_id' => $course->id]),
            'cancel_url' => route('payment.cancel'),
        ]);

        // return response()->json(['id' => $checkoutSession->id]);
        return redirect($checkoutSession->url);
    }

    public function paymentSuccess(Request $request, $course_id)
    {
        $user = Auth::user();
        $course = Course::findOrFail($course_id);

        $existingEnrollment = UserCourse::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->first();

        if (!$existingEnrollment) {
            UserCourse::create([
                'user_id' => $user->id,
                'course_id' => $course->id,
                'expires_at' => now()->addWeek(), // Access expires in 1 week
            ]);
        }


        return redirect()->route('student.courses-details', ['course_id' => $course_id])->with('success', 'Payment successful! You have been enrolled.');
    }

    public function paymentCancel()
    {

        return redirect()->route('student.dashboard')->with('error', 'Payment was canceled.');        // return redirect()->route('student.dashboard')->with('error', 'Payment was canceled.');
    }
}
