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
    //ABOUT TITLES
    Route::get('about/titles', [AdminController::class, 'siteAboutTitle'])->name('site.about.title.show');
    Route::post('update/site-about/titles', [AdminController::class, 'updateSiteAboutTitle'])->name('site.about.title.update');
    // ABOUT DIVS
    Route::get('about/div/new', [AdminController::class, 'siteAboutNewDiv'])->name('site.about.div.new');
    Route::post('about/div/new/store', [AdminController::class, 'siteAboutNewDivStore'])->name('site.about.div.new.store');
    Route::get('about/divs', [AdminController::class, 'siteAboutDivs'])->name('site.about.divs.show');
    Route::get('about/divs/edit/{div_id}', [AdminController::class, 'siteAboutDivsEdit'])->name('site.about.div.edit.show');
    Route::post('about/divs/update', [AdminController::class, 'siteAboutDivsUpdate'])->name('site.about.div.update');
    Route::get('about/div/delete/{div_id}', [AdminController::class, 'siteAboutDivsDelete'])->name('site.about.div.delete');
    // Route::post('update/site-about/divs', [AdminController::class, 'updateSiteAboutDivs'])->name('site.about.divs.update');
    // END ABOUT DIVS

    // FEATURES TITLES
    Route::get('feature/titles', [AdminController::class, 'siteFeatureTitles'])->name('site.feature.titles.show');
    Route::post('update/site-feature/titles', [AdminController::class, 'updateSiteFeatureTitls'])->name('site.feature.titles.update');

    // START FEATURES DIVS
    Route::get('feature/div/new', [AdminController::class, 'siteFeatureNewDiv'])->name('site.feature.div.new');
    Route::post('feature/div/new/store', [AdminController::class, 'siteFeatureNewDivStore'])->name('site.feature.div.new.store');
    Route::get('feature/divs', [AdminController::class, 'siteFeatureDivs'])->name('site.feature.divs.show');
    Route::get('feature/divs/edit/{div_id}', [AdminController::class, 'siteFeatureDivsEdit'])->name('site.feature.div.edit.show');
    Route::post('feature/divs/update', [AdminController::class, 'siteFeatureDivsUpdate'])->name('site.feature.div.update');
    Route::get('feature/div/delete/{div_id}', [AdminController::class, 'siteFeatureDivsDelete'])->name('site.feature.div.delete');
    // END FEATURES DIVS


    // HOW TO ORDER
    // ****************************************************************************************************

    // TITLES
    Route::get('how-to-order/titles', [AdminController::class, 'siteHowToOrderTitles'])->name('site.howToOrder.titles.show');
    Route::post('update/site-how-to-order/titles', [AdminController::class, 'updateSiteHowToOrderTitls'])->name('site.howToOrder.titles.update');

    // START HOW TO ORDER DIVS
    Route::get('step/div/new', [AdminController::class, 'siteStepNewDiv'])->name('site.step.div.new');
    Route::post('step/div/new/store', [AdminController::class, 'siteStepNewDivStore'])->name('site.step.div.new.store');
    Route::get('step/divs', [AdminController::class, 'siteStepDivs'])->name('site.step.divs.show');
    Route::get('step/divs/edit/{div_id}', [AdminController::class, 'siteStepDivsEdit'])->name('site.step.div.edit.show');
    Route::post('step/divs/update', [AdminController::class, 'siteStepDivsUpdate'])->name('site.step.div.update');
    Route::get('step/div/delete/{div_id}', [AdminController::class, 'siteStepDivsDelete'])->name('site.step.div.delete');
    // END HOW TO ORDER DIVS
    // ****************************************************************************************************


    // START CUSOMER OPINION DIVS
    Route::get('customer-opinion/div/new', [AdminController::class, 'siteCustomerOpinionNewDiv'])->name('site.customer-opinion.div.new');
    Route::post('customer-opinion/div/new/store', [AdminController::class, 'siteCustomerOpinionNewDivStore'])->name('site.customer-opinion.div.new.store');
    Route::get('customer-opinion/divs', [AdminController::class, 'siteCustomerOpinionDivs'])->name('site.customer-opinion.divs.show');
    Route::get('customer-opinion/divs/edit/{div_id}', [AdminController::class, 'siteCustomerOpinionDivsEdit'])->name('site.customer-opinion.div.edit.show');
    Route::post('customer-opinion/divs/update', [AdminController::class, 'siteCustomerOpinionDivsUpdate'])->name('site.customer-opinion.div.update');
    Route::get('customer-opinion/div/delete/{div_id}', [AdminController::class, 'siteCustomerOpinionDivsDelete'])->name('site.customer-opinion.div.delete');
    // END CUSOMER OPINION DIVS


    // CONTACT US MESSAGES
    Route::get('contact-us/messages', [AdminController::class, 'showContactUsMessages'])->name('contact.us.messages.show');
    Route::get('contact-us/messages/delete/{msg_id}', [AdminController::class, 'DeleteMessage'])->name('contact.us.message.delete');
    // END CONTACT US MESSAGES
});
