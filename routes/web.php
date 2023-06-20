<?php

use App\Http\Controllers\User\CoreController as UserCoreController;
use App\Http\Controllers\viewsController;
use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/catalog', [viewsController::class, 'catalog'])->name('catalog');
Route::get('/catalog/{product}', [viewsController::class, 'product'])->name('product');

Route::get('/cart', [viewsController::class, 'cart'])->name('cart');

Route::get('/admin', [viewsController::class, 'admin'])->name('admin');

Route::group(['prefix' => 'core'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::post('login', [UserCoreController::class, 'login'])->name('core.user.login');
        Route::post('registration', [UserCoreController::class, 'registration'])->name('core.user.registration');
        Route::get('logout', [UserCoreController::class, 'logout'])->name('core.user.logout');
    });

    Route::post('/{product}/cart/add', [UserCoreController::class, 'cartAdd'])->name('core.product.cart.add');
    Route::post('/{product}/cart/edit', [UserCoreController::class, 'cartEdit'])->name('core.product.cart.edit');
    Route::post('/{product}/cart/remove', [UserCoreController::class, 'cartRemove'])->name('core.product.cart.remove');

    Route::post('/admin/product/create', [UserCoreController::class, 'adminProductCreate'])->name('core.admin.product.create');
    Route::post('/admin/product/remove/{product}', [UserCoreController::class, 'adminProductRemove'])->name('core.admin.product.remove');
});

