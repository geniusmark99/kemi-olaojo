<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LuluController;
use App\Http\Controllers\PrintfulController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/lulu/products', [LuluController::class, 'listProducts']);
Route::post('/lulu/order', [LuluController::class, 'placeOrder']);

Route::get('/printful/products', [PrintfulController::class, 'listProducts']);


Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/protokos-publishers/review/{id}', 'bookReview')->name('book-review');
    Route::post('/contact', 'contactSent')->name('contact-sent');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/protokos-publishers', 'protokos')->name('protokos');
    Route::get('/protokos-publisher-bookstore', 'bookstore')->name('bookstore');
    Route::get('/medical-ultrasound', 'medical')->name('medical');
    Route::get('/publisher-search', 'publisherSearch');
    Route::get('/poems', 'getPoems');


    Route::middleware('auth')->group(function () {

        Route::get('/medical-ultrasound/dashboard', 'studentDashboard')->name('student.dashboard');
        Route::get('/medical-ultrasound/courses', 'studentCourses')->name('student.courses');
        Route::get('/medical-ultrasound/courses/{slug}', 'studentCourseSlug')->name('student.courses.slug');
        Route::get('/medical-ultrasound/courses/details/{slug}', 'studentCourseDetails')->name('student.courses-details');
        Route::get('/medical-ultrasound/{course_code}/cbt', 'showCBT')->name('course.cbt');
        Route::post('/medical-ultrasound/{course_code}/submit',  'cbtSubmit')->name('course.cbt.submit');
        Route::get('/medical-ultrasound/result/{result_id}',  'cbtResult')->name('course.cbt.result');
        Route::get('/certificate/generate/{result_id}', 'generateCertificate')->name('certificate.generate');
        Route::get('/medical-ultrasound/certification', 'studentCertificate')->name('student.certificate');
        Route::get('/medical-ultrasound/cbt', 'studentCbt')->name('student.cbt');
        Route::get('/medical-ultrasound/cbt-exam', 'studentExam')->name('student.cbt-exam');
        Route::get('/medical-ultrasound/cbt-result', 'studentResult')->name('student.cbt-result');
        Route::get('/medical-ultrasound/settings', 'studentSettings')->name('student.settings');
        Route::post('/medical-ultrasound/settings/profile-update', 'profileUpdate')->name('profile.update');
        Route::post('/medical-ultrasound/settings/password-update', 'passwordUpdate')->name('password.update');
        Route::post('/medical-ultrasound/settings/upload-picture', 'uploadPicture')->name('upload.picture');
        Route::get('/medical-ultrasound/cbt-quiz', 'studentQuiz')->name('student.quiz');
    });

    Route::get('/favour-store', 'favourStore')->name('favour');
    Route::get('/favour-store/all-products', 'allProducts')->name('all-products');
    Route::get('/eko-ede-yoruba', 'yorubaWeb')->name('ede-yoruba');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/checkout/{course_id}', [PaymentController::class, 'createCheckoutSession'])->name('payment.checkout');
    Route::get('/payment/success/{course_id}', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
    Route::get('/payment/cancel', [PaymentController::class, 'paymentCancel'])->name('payment.cancel');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
