<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CopmuterViewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
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
    $controller = new CopmuterViewController();
    $randomComputers = $controller->getRandomComputers();
    return view('main', ['randomComputers' => $randomComputers]);
});


Route::get('/random-computers', [CopmuterViewController::class, 'getRandomComputers'])->name('randomComputers');
Route::get('/gamerModels', [CopmuterViewController::class, 'showGamerModels'])->name('gamerModels');
Route::get('/budgetModels', [CopmuterViewController::class, 'showBudgetModels'])->name('budgetModels');
Route::get('/workstations', [CopmuterViewController::class, 'showWorkstationModels'])->name('workstationModels');
Route::get('/{category}/{id}', [CopmuterViewController::class, 'show'])->name('computerDetail');
Route::get('/reviews', [ReviewController::class, 'showReview'])->name('reviews');

Route::post('/submit-order', [OrderController::class, 'submitOrder'])->name('submitOrder');
Route::post('/submit-application', [ApplicationController::class, 'submitApplication'])->name('submitApplication');
Route::post('/submit-review', [ReviewController::class, 'submitReview'])->name('submitReview');


Route::get('/services', function () {
    return view('services');
});

Route::get('/conditions', function () {
    return view('conditions');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/agree', function () {
    return view('agree');
});

Auth::routes();
