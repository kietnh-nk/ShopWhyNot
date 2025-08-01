<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CartController;

Route::middleware(['maintenance_active'])->group(function () {
    //Hiển thị trang bảo trì website
    Route::get('maintenance', [HomeController::class, "maintenance"])->name('user.maintenance');
});

Route::middleware(['maintenance'])->group(function () {
    //FE: Trang chủ
    Route::get('/', [HomeController::class, "index"])->name('user.home');
    Route::get('introduction', [HomeController::class, "introduction"])->name('user.introduction');
    //FE: Trang chi tiết sản phẩm
    Route::get('product-detail/{product}', [ProductDetailController::class, "show"])->name('user.products_detail');
    //FE: Trang hiển thị sản phẩm tìm kiếm
    Route::get('search', [SearchController::class, "search"])->name('user.search');
    //FE: Trang hiển thị sản phẩm theo danh mục
    Route::get('products/{slug}', [ProductController::class, "index"])->name('user.products');

    Route::middleware('guest')->group(function () {
        //FE: Trang đăng nhập
        Route::get('login', [AuthenticatedSessionController::class, "create"])->name('user.login');
        Route::post('login', [AuthenticatedSessionController::class, "store"]);

        //FE: Trang đăng ký
        Route::get('register', [RegisterController::class, "create"])->name('user.register');
        Route::post('register', [RegisterController::class, "store"]);

        
        //FE: Trang xác thực tài khoản
        Route::get('verify-email/{user}', [RegisterController::class, "verifyEmail"])
            ->name('user.verification.notice');
        Route::get('account/verify/{id}', [VerifyEmailController::class, 'verifyAccount'])
            ->name('user.verify');
        Route::post('resend-email', [RegisterController::class, "resendEmail"])->name('user.resend_email');

        //FE: Trang xác thực tài khoản thành công
        Route::get('verify-success', [RegisterController::class, "success"])->name('user.verify.success');

        //FE: Trang quên mật khẩu
        Route::get('forgot-password', [ForgotPasswordController::class, "create"])->name('user.forgot_password_create');
        Route::post('forgot-password', [ForgotPasswordController::class, "store"])->name('user.forgot_password_store');

        //FE: Trang đổi mật khẩu mới khi quên mật khẩu
        Route::get('account/change-new-password', [ForgotPasswordController::class, "changePassword"])->name('user.change_new_password');
        Route::post('account/change-new-password', [ForgotPasswordController::class, "updatePassword"]);

    });
});
Route::middleware(['auth.user'])->group(function () {
        //BE: xử lý logout
        Route::get('logout', [AuthenticatedSessionController::class, "destroy"])->name('user.logout');
        //BE: xử lý khi đánh sản phẩm
        Route::post('product-review/{product}', [ProductReviewController::class, "store"])->name('product_review.store');

        Route::group(['prefix' => 'cart'], function(){
            //FE: Trang giỏ hàng
            Route::get('/', [CartController::class, 'index'])->name('cart.index');
            Route::post('add-to-cart', [CartController::class, 'store'])->name('cart.store');
            Route::post('update-cart', [CartController::class, 'update'])->name('cart.update');
            Route::get('delete{id}', [CartController::class, 'delete'])->name('cart.delete');
            Route::get('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
        });
    });



