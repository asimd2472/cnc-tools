<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserOrderController;
use App\Http\Controllers\User\UserProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/shared-projects',[HomeController::class,'shared_projects'])->name('shared_projects');
Route::get('/project-details',[HomeController::class,'project_details'])->name('project_details');
Route::get('/cnc-quote',[HomeController::class,'cnc_quote'])->name('cnc_quote');
Route::get('/profile',[HomeController::class,'profile'])->name('profile');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::get('/why-us',[HomeController::class,'why_us'])->name('why_us');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/cnc-machining',[HomeController::class,'cnc_machining'])->name('cnc_machining');
Route::get('/3d-printing',[HomeController::class,'threed_printing'])->name('threed_printing');
Route::get('/laser-cutting',[HomeController::class,'laser_cutting'])->name('laser_cutting');
Route::get('/sheet-metal',[HomeController::class,'sheet_metal'])->name('sheet_metal');
Route::get('/wire-cutting',[HomeController::class,'wire_cutting'])->name('wire_cutting');

Route::get('/login',[UserAuthController::class,'index'])->name('login');
Route::get('/register',[UserAuthController::class,'register'])->name('register');
Route::post('login-check', [UserAuthController::class, 'login'])->name('login.submit');
Route::post('signup', [UserAuthController::class, 'signup'])->name('signup');

Route::get('/auth/google', [UserAuthController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [UserAuthController::class, 'callback']);



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[AuthController::class,'index'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.submit');

    Route::middleware(['auth','is_admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('profile', [ProfileController::class, 'update_profile'])->name('update_profile');
        Route::post('change_password', [ProfileController::class, 'change_password'])->name('change_password');

        Route::get('users', [UsersController::class, 'index'])->name('users');
        Route::post('checkStatusUsers', [UsersController::class, 'checkStatusUsers'])->name('checkStatusUsers');
        Route::delete('deleteUser', [UsersController::class, 'deleteUser'])->name('user.delete');
        
        Route::get('orders', [OrderController::class, 'index'])->name('orders');
        Route::get('orders-details/{order_number}', [OrderController::class, 'orders_details'])->name('orders_details');
        Route::delete('deleteOrder', [OrderController::class, 'deleteOrder'])->name('order.delete');
        Route::post('updateSummary', [OrderController::class, 'updateSummary'])->name('orders.updateSummary');
        
    });

});




Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['auth','is_user'])->group(function () {
        Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
        Route::get('logout', [UserAuthController::class, 'logout'])->name('logout');
        Route::get('profile', [UserProfileController::class, 'index'])->name('profile');
        Route::post('profile', [UserProfileController::class, 'update_profile'])->name('update_profile');
        Route::post('change_password', [UserProfileController::class, 'change_password'])->name('change_password');

        Route::get('my-order', [UserOrderController::class, 'index'])->name('my_order');
        Route::get('orders-details/{order_number}', [UserOrderController::class, 'orders_details'])->name('orders_details');
    });

});
