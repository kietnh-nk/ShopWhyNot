<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController as AdminEmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VoucherController;
use Illuminate\Support\Facades\Route;

Route::get('test', function(){
    return view('admin.Test.main');
});
Route::middleware(['auth.admin'])->group(function () {
    Route::get('logout', [AuthenticatedSessionController::class, "destroy"])->name('admin.logout');
    Route::get('verify-email', [AdminEmailVerificationPromptController::class, "__invoke"])
        ->name('admin.verification.notice');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('admin.verification.send');
    Route::get('account/verify/{id}', [VerifyEmailController::class, 'verifyAccount'])
        ->name('admin.user.verify');
    Route::get('verify-email/success', [VerifyEmailController::class, 'success'])
        ->name('admin.verify.success');
});


Route::middleware('guest:admin')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, "create"])->name('admin.login');
    Route::post('login', [AuthenticatedSessionController::class, "store"]);
});
