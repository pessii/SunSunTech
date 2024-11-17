<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminRegisterController;

use Illuminate\Support\Facades\Route;

/**
 * トップページ
 */
Route::get('/', function () {
    return view('top');
});

/**
 * ダッシュボード
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * プロフィール
 */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// AdminRegisterController　管理者用コントローラー
Route::group(['prefix' => 'admin'], function () {
    // 登録
    // Route::get('register', [AdminRegisterController::class, 'create'])
    //     ->name('admin.register');
    // Route::post('register', [AdminRegisterController::class, 'store']);

    // ログイン
    Route::get('login', [AdminLoginController::class, 'showLoginPage'])
        ->name('admin.login');

    Route::post('login', [AdminLoginController::class, 'login']);

    // ログイン必須
    Route::middleware(['auth:admin'])->group(function () {
        // ダッシュボード
        Route::get('dashboard', fn() => view('admin.dashboard'))
            ->name('admin.dashboard');
    });
});

/**
 * 商品一覧
 */
Route::get('/products/{category?}/{subcategory?}', [ProductController::class, 'index'])->name('products.index');

require __DIR__.'/auth.php';
