<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\IndexComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\DetailsProduct;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', IndexComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/about', AboutComponent::class);
Route::get('/contact', ContactComponent::class);
Route::get('/checkout', CheckoutComponent::class);
Route::get('/cart', CartComponent::class)->name('product.cart') ;
Route::get('/product/{slug}', DetailsProduct::class)->name('product.details');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// for Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {
        Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
});

// for User

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');
});