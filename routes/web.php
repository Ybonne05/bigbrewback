<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//default home
Route::view('/', 'home.home');

Route::middleware('guest')->group(function () {

    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

        // Dashboard route
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

    // Products routes
    Route::get('/products/list', [DashboardController::class, 'showListOfProducts'])->name('products.list');
    Route::get('/products/delisted', [DashboardController::class, 'showDelistedProducts'])->name('products.delisted');

    // Orders routes
    Route::get('/orders/pending', [DashboardController::class, 'showPendingOrders'])->name('orders.pending');
    Route::get('/orders/processing', [DashboardController::class, 'showProcessingOrders'])->name('orders.processing');
    Route::get('/orders/processed', [DashboardController::class, 'showProcessedOrders'])->name('orders.processed');
    Route::get('/orders/pickup', [DashboardController::class, 'showPickUpOrders'])->name('orders.pickup');
    Route::get('/orders/deliver', [DashboardController::class, 'showDeliverOrders'])->name('orders.deliver');
    Route::get('/orders/cancelled', [DashboardController::class, 'showCancelledOrders'])->name('orders.cancelled');

    // Messages route
    Route::get('/messages', [DashboardController::class, 'showMessages'])->name('messages');

    // Settings routes
    Route::get('/settings/account', [DashboardController::class, 'showAccountInformation'])->name('settings.account');
    Route::get('/settings/shop', [DashboardController::class, 'showShopInformation'])->name('settings.shop');
    Route::get('/settings/chat', [DashboardController::class, 'showChatSettings'])->name('settings.chat');

});
