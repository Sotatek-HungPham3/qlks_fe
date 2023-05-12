<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [FrontendController::class, 'homePage'])->name('homePage');
Route::get('/list-building', [FrontendController::class, 'listBuilding'])->name('listBuilding');
Route::get('/room-type/{slug}', [FrontendController::class, 'detailBuilding'])->name('detailBuilding');
Route::get('/images/{slug}', [FrontendController::class, 'images'])->name('images');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/booking/{room_type?}/{check_in?}/{check_out?}/{guest?}', [FrontendController::class, 'booking'])->name('booking');
Route::get('/payments', [FrontendController::class, 'payments'])->name('payments');
Route::get('/payment-return', [FrontendController::class, 'paymentReturn'])->name('paymentReturn');




Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog-detail', [FrontendController::class, 'blogDetail'])->name('blogDetail');
Route::get('/flight', [FrontendController::class, 'flight'])->name('flight');
Route::get('/flight-list', [FrontendController::class, 'flightList'])->name('flightList');

Route::get('/car-list', [FrontendController::class, 'carList'])->name('carList');
Route::get('/pakage-Deals', [FrontendController::class, 'pakageDeals'])->name('pakageDeals');
Route::get('/pakage-Deals-List', [FrontendController::class, 'pakageDealsList'])->name('pakageDealsList');
Route::get('/cruises', [FrontendController::class, 'cruises'])->name('cruises');
Route::get('/cruises-list', [FrontendController::class, 'cruisesList'])->name('cruisesList');
Route::get('/cruises-detail', [FrontendController::class, 'cruisesDetail'])->name('cruisesDetail');
Route::get('/tours', [FrontendController::class, 'tours'])->name('tours');
Route::get('/tours-list', [FrontendController::class, 'toursList'])->name('toursList');
Route::get('/tours-detail', [FrontendController::class, 'toursDetail'])->name('toursDetail');

