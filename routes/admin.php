<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/login', 'login')->name('admin.login');
    Route::post('/admin/login', 'loginCheck');
    Route::get('/admin/forget-password', 'forget')->name('admin.forget');


    Route::middleware('admin')->group(function () {
        Route::get('/admin/verify-token', 'tokenForm')->name('admin.verify.token');
        Route::post('/admin/verify-token', 'verifyToken');
        Route::post('admin/logout', 'logout')->name('admin.logout');
        Route::get('/admin/dashboard', 'dashboard')->name('admin.dashboard');
        Route::get('/admin/student', 'student')->name('admin.student');
        Route::get('/admin/student/{id}', 'studentId')->name('admin.student.id');
        Route::get('/admin/blog', 'blog')->name('admin.blog');
        Route::get('/admin/courses', 'courses')->name('admin.courses');
        Route::get('/admin/profile', 'profile')->name('admin.profile');
        Route::get('/admin/favour-store', 'favourStore')->name('admin.favour.store');
        Route::get('/admin/poem', 'poemEdit')->name('admin.poem');
        Route::get('/admin/protokos', 'protokos')->name('admin.protokos');
        Route::post('/admin/uploadcourse', 'uploadCourse')->name('admin.courses.upload');
        Route::get('/admin/protokos/{id}', 'protokosId')->name('admin.protokos.id');
        Route::post('/admin/profile-update', 'profileUpdate')->name('admin.profile.update');
        Route::post('/admin/password-update', 'passwordUpdate')->name('admin.password.update');
        Route::get('/admin/add-questions', 'createQuestions')->name('admin.addQuestions');
        Route::get('/admin/all-questions', 'allQuestions')->name('admin.allQuestions');
        Route::delete('/admin/questions/{id}', 'deleteQuestion')->name('admin.questions.delete');
        Route::get('/admin/question/{id}/edit', 'editQuestion')->name('admin.questions.edit');
        Route::put('/admin/question/{id}', 'updateQuestion')->name('admin.questions.update');
        Route::post('/admin/store-questions', 'storeQuestions')->name('admin.storeQuestions');
        Route::delete('/admin/sessions/{id}', 'destroySession')->name('admin.sessions.destroy');
    });
});

// Route::controller(AdminSessionController::class)->group(function () {
//     Route::prefix('admin')->middleware(['auth:admin'])->group(function () {
//         Route::get('/profile/sessions', 'sessions')->name('admin.sessions');
//         Route::delete('/profile/sessions/{id}', 'destroySession')->name('admin.sessions.destroy');
//     });
// });


// Route::prefix('admin')->group(function () {
//     Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
//     Route::post('/login', [AdminController::class, 'login']);
//     Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

//     Route::middleware('admin')->group(function () {
//         Route::controller(AdminController::class)->group(function () {
//             Route::group(['middleware' => ['admin.notifications']], function () {


//                 // Route::get('/buyer-subscriptions', 'buyerSubscriptions')->name('admin.subscriptions');
//                 // Route::get('/dashboard', 'dashboard')->name('admin.dashboard');
//                 // Route::get('/projects', 'projects')->name('admin.projects');
//                 // Route::get('/message', 'message')->name('admin.message');
//                 // Route::get('/notification', 'notification')->name('admin.notification');
//                 // Route::patch('/notifications/{id}/read', 'markAsRead')->name('admin.notifications.read');
//                 // Route::get('/user/active', 'activeUsers')->name('admin.active.users');
//                 // Route::get('/user/all', 'showAllUser')->name('admin.all.users');


//                 // Route::get('/user/{uuid}', 'showUser')->name('admin.user');
//                 // Route::get('/buyers', 'buyers')->name('admin.user.buyers');
//                 // Route::post('/buyer-activate-subscription/{user}', 'buyerActivateSubscription')->name('admin.activate.subscription');

//                 // Route::get('/user/unactive', 'unactiveUsers')->name('admin.unactive.users');
//                 // Route::get('/user/activated', 'activatedUser')->name('admin.activated.users');
//                 // Route::post('/user/{id}/activate', 'activate')->name('admin.activate');
//                 // Route::post('/user/{id}/deactivate', 'deactivate')->name('admin.deactivate');
//                 // Route::delete('/user/delete/{id}', 'deleteUser')->name('admin.deleteUser');
//                 // Route::post('/activate-asset/{assetId}', 'markAsActive')->name('admin.activate-asset');
//                 // Route::post('/notifications/{id}/read', 'markAsRead')->name('admin.notifications.read');
//                 // Route::delete('/notifications/{id}', 'deleteNotification')->name('admin.notifications.delete');
//                 // Route::post('/unactivate-asset/{assetId}', 'unmarkAsActive')->name('admin.unactivate-asset');

//                 // Route::get('/profile', 'profile')->name('admin.profile');
//                 // Route::post('profile/upload', 'uploadProfilePicture')->name('admin.profile.upload');
//                 // Route::delete('profile/delete', 'deleteProfilePicture')->name('admin.profile.delete');

//                 // Route::put('/update-profile', 'updateProfile')->name('admin.updateProfile');
//                 // Route::get('/users', 'users')->name('admin.users');
//                 // Route::get('/user/assets/{slug}', 'showUserAsset')->name('admin.show-assets');

//                 // Route::get('/verify-token', 'showVerifyTokenForm')->name('admin.verify.token');
//                 // Route::post('/verify-token', 'verifyToken');
//             });
//         });
//         // Route::view('/user/blocked', 'admin.blocked-users')->name('admin.blocked.users');
//     });
// });
