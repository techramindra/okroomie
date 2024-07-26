<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController as AdminAuth;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\Plan_inclusionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FindMeARoomController;
use App\Http\Controllers\FindMeARoomieController;
use App\Http\Controllers\DashboardController;






use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // Route::get('register', [RegisteredUserController::class, 'create'])
    //             ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store'])->name('register');;

    // Route::get('login', [AuthenticatedSessionController::class, 'create'])
    //             ->name('login');

     Route::get('login',function()
     {
        return view('pages/frontend/login');
     })->name('login');

     Route::get('register',function()
     {
        return view('pages/frontend/register');
     })->name('register');

    Route::post('login', [AuthenticatedSessionController::class, 'login'])->name('login');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');

                
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

//admin routes
Route::prefix('admin/')->name('admin.')->group(function(){
    Route::get('/login',[AdminAuth::class,'create'])->middleware('guest:admin')->name('login');
    Route::post('/login',[AdminAuth::class,'store'])->middleware('guest:admin');
    Route::get('/logout',[AdminAuth::class,'destroy'])->name('logout');
    Route::get('/users',[UserController::class,'show'])->middleware('admin');
    Route::get('/payment',[PaymentController::class,'paymentShowForAdmin'])->middleware('admin')->name('paymentShowForAdmin');
    Route::get('/listing-room',[FindMeARoomController::class,'roomListingForAdmin'])->middleware('admin')->name('roomListingForAdmin');
    Route::get('/listing-roomie',[FindMeARoomieController::class,'roomieListingForAdmin'])->middleware('admin')->name('roomieListingForAdmin');
    Route::get('/listing-feedback',[DashboardController::class,'listingFeedbackForAdmin'])->middleware('admin')->name('listingFeedbackForAdmin');



    //plan
    Route::get('/plan',[PlanController::class,'index'])->middleware('admin')->name('plan.index');
    Route::get('/showplan',[PlanController::class,'show'])->middleware('admin')->name('plan.show');
    Route::post('/addplan',[PlanController::class,'create'])->middleware('admin')->name('plan.create');
    Route::get('/deleteplan/{id}',[PlanController::class,'destroy'])->middleware('admin')->name('plan.destroy');
    Route::get('/plan/{id}',[PlanController::class,'edit'])->middleware('admin')->name('plan.edit');
    Route::post('/plan',[PlanController::class,'update'])->middleware('admin')->name('plan.update');
    //inclusion of plan
    Route::get('/inclusion',[Plan_inclusionController::class,'index'])->middleware('admin')->name('inclusion.index');
    Route::get('/showinclusion',[Plan_inclusionController::class,'show'])->middleware('admin')->name('inclusion.show');
    Route::post('/addinclusion',[Plan_inclusionController::class,'create'])->middleware('admin')->name('inclusion.create');
    Route::get('/inclusion/{id}',[Plan_inclusionController::class,'edit'])->middleware('admin')->name('inclusion.edit');
    Route::get('/deleteinclusion/{id}',[Plan_inclusionController::class,'destroy'])->middleware('admin')->name('inclusion.destroy');
    Route::post('/inclusion',[Plan_inclusionController::class,'update'])->middleware('admin')->name('inclusion.update');
    //general admin
    Route::get('/users/{id}',[UserController::class,'blockuser'])->middleware('admin')->name('blockuser');
    Route::get('/password',[AdminAuth::class,'adminPasswordIndex'])->middleware('admin')->name('adminpassword');
    Route::post('/password',[AdminAuth::class,'adminPassword'])->middleware('admin');
    Route::get('/dashboard',function(){
        return view('admin.auth.dashboard');
    })->middleware('admin');
    Route::get('/test',function(){
        return 'test for middleware access';
    })->middleware('admin');

});

