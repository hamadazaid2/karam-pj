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
    Route::get('header', [AdminController::class, 'siteHeader'])->name('site.header.show');
    Route::post('update/site-header', [AdminController::class, 'updateSiteHeader'])->name('site.header.update');
    Route::get('about', [AdminController::class, 'siteAbout'])->name('site.about.show');
    Route::post('update/site-about', [AdminController::class, 'updateSiteAbout'])->name('site.about.update');
    Route::get('feature/titles', [AdminController::class, 'siteFeatureTitles'])->name('site.feature.titles.show');
    Route::post('update/site-feature/titles', [AdminController::class, 'updateSiteFeatureTitls'])->name('site.feature.titles.update');
    Route::get('how-to-order/titles', [AdminController::class, 'siteHowToOrderTitles'])->name('site.howToOrder.titles.show');
    Route::post('update/site-how-to-order/titles', [AdminController::class, 'updateSiteHowToOrderTitls'])->name('site.howToOrder.titles.update');

});
