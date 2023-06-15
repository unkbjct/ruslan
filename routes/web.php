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


Route::group(['prefix' => 'core'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::post('login', [UserCoreController::class, 'login'])->name('core.user.login');
        Route::post('registration', [UserCoreController::class, 'registration'])->name('core.user.registration');
        Route::get('logout', [UserCoreController::class, 'logout'])->name('core.user.logout');
    });
});
