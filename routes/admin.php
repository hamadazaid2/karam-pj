<?php

use App\Http\Controllers\Admin\AdminController;
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

Route::group(['prefix' => 'admin'], function () {
    Route::get('site-config', [AdminController::class, 'siteConfiuration'])->name('site.config.show');
    Route::post('update/site-config', [AdminController::class, 'updateSiteConfig'])->name('site.config.update');
});
