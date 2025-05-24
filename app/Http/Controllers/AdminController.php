<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use App\Mail\AdminTokenMail;
use App\Models\CBTQuestion;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\DB;
use App\Services\DeviceService;

class AdminController extends Controller
{


    protected $redirectTo = '/admin/dashboard';


    public function login(): View
    {
        return view('admin.login');
    }

    public function loginCheck(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            $admin = Auth::guard('admin')->user();
            $adminName = Admin::find(1)->firstname . ' ' . Admin::find(1)->lastname;
            $token = rand(100000, 999999);
            Session::put('admin_token', $token);
            Mail::to($admin->email)->send(new AdminTokenMail($token, $adminName));
            return redirect()->route('admin.verify.token');
        }
        return redirect()->back()->withErrors(['Invalid login credentials.']);
    }


    public function logout(Request $request)
    {
        $request->session()->invalidate();
        Session::forget('admin_token');
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }



    public function  tokenForm()
    {
        return view('admin.token-verify');
    }


    public function verifyToken(Request $request)
    {
        $request->validate([
            'token' => 'required|numeric'
        ]);

        if ($request->token == Session::get('admin_token')) {
            Session::forget('admin_token'); // Clear the token from session
            // app(DeviceService::class)->checkDevice($request);
            return redirect()->route('admin.dashboard'); // Redirect to admin dashboard
        }

        return redirect()->back()->withErrors(['Invalid token. Please try again.']);
    }

    public function forget(): View
    {
        return view('admin.forget-password');
    }

    public function dashboard(): View
    {
        $users = User::all();
        $courses = Course::all();
        $courseQuestions = CBTQuestion::all();
        return view('admin.dashboard', compact('users', 'courses', 'courseQuestions'));
    }

    public function blog(): View
    {
        return view('admin.blog');
    }

    public function courses(): View
    {
        return view('admin.courses');
    }



    public function favourStore(): View
    {
        return view('admin.store');
    }

    public function  student()
    {
        $users = User::all();
        return view('admin.student', compact('users'));
    }

    public function  studentId($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        return view('admin.studentView', compact('user'));
    }

    public function protokos()
    {
        $courses = Course::all();
        return view('admin.protokos', compact('courses'));
    }

    public function protokosId($id)
    {
        $question = CBTQuestion::where('id', $id)->firstOrFail();
        return view('admin.protokos-details', compact('question'));
    }

    public function uploadCourse(Request $request)
    {
        $validated  = $request->validate([
            'course_title' => 'required|string|max:255',
            'course_code' => 'required|string|max:255|unique:courses,course_code',
            'course_description' => 'required|string',
            'course_video_url' => 'required|mimes:mp4,mov,avi|max:51200',
            'course_thumbnail_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'course_price' => 'required|string',
        ]);

        if ($request->hasFile('course_thumbnail_url')) {
            // $courseThumbnail = Cloudinary::upload($request->file('course_thumbnail_url')->getRealPath())->getSecurePath();

            $courseThumbnail = $request->file('course_thumbnail_url')->store('images', 'public');
            $validated['course_thumbnail_url']  =  $courseThumbnail;
        }
        if ($request->hasFile('course_video_url')) {
            // $courseVideo = Cloudinary::uploadVideo($request->file('course_video_url')->getRealPath())->getSecurePath();
            $courseVideo = $request->file('course_video_url')->store('videos', 'public');
            $validated['course_video_url'] =  $courseVideo;
        }
        Course::create($validated);
        return redirect()->back()->with('success', 'Question added successfully!');
    }


    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);
        if ($course->course_thumbnail_url && Storage::disk('public')->exists($course->course_thumbnail_url)) {
            Storage::disk('public')->delete($course->course_thumbnail_url);
        }
        if ($course->course_video_url && Storage::disk('public')->exists($course->course_video_url)) {
            Storage::disk('public')->delete($course->course_video_url);
        }

        $course->delete();

        return redirect()->back()->with('success', 'Course deleted successfully!');
    }





    public function profile()
    {
        $user = Auth::guard('admin')->user();

        // for admin session
        $sessions = DB::table('sessions')
            ->where('user_id')
            ->orderByDesc('last_activity')
            ->get()
            ->map(function ($session) {
                return [
                    'id' => $session->id,
                    'ip_address' => $session->ip_address,
                    'user_agent' => $session->user_agent,
                    'is_current_device' => $session->id === session()->getId(),
                    'last_active' => \Carbon\Carbon::createFromTimestamp($session->last_activity)->diffForHumans(),
                ];
            });


        // return view('admin.profile', compact('user', 'sessions'));
        return view('admin.profile', [
            'user' => $user,
            'sessions' => $sessions,

        ]);
    }

    public function destroySession($id)
    {
        DB::table('sessions')
            ->where('id', $id)
            ->where('user_id')
            ->delete();

        return back()->with('success', 'Session has been logged out.');
    }



    public function profileUpdate(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->email = $request->email;
        $admin->save();
        return redirect()->back()->with('status', 'Your profile have been updated successfully!');
    }



    public function passwordUpdate(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
        if (!Hash::check($request->current_password, $admin->password)) {
            throw ValidationException::withMessages([
                'current_password' => 'The current password is incorrect.',
            ]);
        }
        $admin->update(['password' => Hash::make($request->password)]);
        return redirect()->back()->with('password-status', 'Your password have been updated successfully!');
    }



    public function createQuestions()
    {
        $courses = Course::all();
        $questions = CBTQuestion::all();
        return view('admin.questions', compact('courses', 'questions'));
    }



    public function storeQuestions(Request $request)
    {

        $validatedData = $request->validate([
            'course_code' => 'required|exists:courses,course_code',
            'question' => 'required|string',
            'question_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'option_a' => 'required|string',
            'option_a_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'option_b' => 'required|string',
            'option_b_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'option_c' => 'required|string',
            'option_c_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'option_d' => 'required|string',
            'option_d_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
            'correct_answer' => 'required|in:A,B,C,D',
            'question_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $data = $validatedData;

        foreach (['question_image', 'option_a_image', 'option_b_image', 'option_c_image', 'option_d_image'] as $field) {
            if ($request->hasFile($field)) {
                $data[$field] = Cloudinary::upload($request->file($field)->getRealPath())->getSecurePath();
            }
        }
        CBTQuestion::create($data);
        return redirect()->back()->with('success', 'Question added successfully!');
    }


    public function allQuestions()
    {
        $questions = CBTQuestion::all();
        return view('admin.all-questions', compact('questions'));
    }

    public function deleteQuestion($id)
    {
        $question = CBTQuestion::findOrFail($id);
        if ($question->question_image) {
            Storage::delete('public/' . $question->question_image);
        }
        $question->delete();
        return redirect()->back()->with('success', 'Question deleted successfully!');
    }


    public function editQuestion($id)
    {
        $question = CBTQuestion::findOrFail($id);
        return view('admin.edit-question', compact('question'));
    }

    public function updateQuestion(Request $request, $id)
    {

        $request->validate([
            'course_code' => 'required|exists:courses,course_code',
            'question' => 'required|string',
            'question_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'option_a' => 'required|string',
            'option_a_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'option_b' => 'required|string',
            'option_b_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'option_c' => 'required|string',
            'option_c_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'option_d' => 'required|string',
            'option_d_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'correct_answer' => 'required|in:A,B,C,D',
            'question_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('question_image')) {
            $validatedData['question_image'] = Cloudinary::upload($request->file('question_image')->getRealPath())->getSecurePath();
        }
        if ($request->hasFile('option_a_image')) {
            $validatedData['option_a_image'] = Cloudinary::upload($request->file('option_a_image')->getRealPath())->getSecurePath();
        }
        if ($request->hasFile('option_b_image')) {
            $validatedData['option_b_image'] = Cloudinary::upload($request->file('option_b_image')->getRealPath())->getSecurePath();
        }
        if ($request->hasFile('option_c_image')) {
            $validatedData['option_c_image'] = Cloudinary::upload($request->file('option_c_image')->getRealPath())->getSecurePath();
        }
        if ($request->hasFile('option_d_image')) {
            $validatedData['option_d_image'] = Cloudinary::upload($request->file('option_d_image')->getRealPath())->getSecurePath();
        }
    }


    public function poemEdit()
    {

        $courses = Course::all();
        $questions = CBTQuestion::all();
        return view('admin.poem', compact('courses', 'questions'));
    }


    public function settings(): View
    {
        return view('admin.settings');
    }
}
