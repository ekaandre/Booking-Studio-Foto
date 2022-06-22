<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\MyaccountController;
use App\Http\Controllers\MyorderController;

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

Route::get('/', [HomeController::class, 'index'])
   ->name('home');

Route::get('/detail/{slug}', [DetailController::class, 'index'])
   ->name('detail');

Route::post('/checkout/{id}', [CheckoutController::class, 'process'])
   ->name('checkout-process')
   ->middleware(['auth']);

Route::get('/checkout/{id}', [CheckoutController::class, 'index'])
   ->name('checkout')
   ->middleware(['auth']);

Route::post('/checkout/create/{detail_id}', [CheckoutController::class, 'create'])
   ->name('checkout-create')
   ->middleware(['auth']);

Route::get('/checkout/remove/{detail_id}', [CheckoutController::class, 'remove'])
   ->name('checkout-remove')
   ->middleware(['auth']);

Route::get('/checkout/confirm/{id}', [CheckoutController::class, 'success'])
   ->name('checkout-success')
   ->middleware(['auth']);

Route::get('/reservasi', [ReservasiController::class, 'index'])
   ->name('reservasi');

Route::get('/myaccount/edit', [MyaccountController::class, 'edit'])
   ->name('myaccount-edit');

Route::put('/myaccount/update', [MyaccountController::class, 'update'])
   ->name('myaccount-update');

Route::get('/myorder', [MyorderController::class, 'index'])
   ->name('myorder');

Route::get('/myorder-show/{id}', [MyorderController::class, 'show'])
   ->name('myorder-show');

Route::prefix('admin')
   ->middleware(['auth','admin'])
   ->group(function() {
     Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');

      Route::resource('reservation', ReservationController::class);
      Route::resource('gallery', GalleryController::class);
      Route::resource('transaction', TransactionController::class);
      Route::get('/exportpdf', [TransactionController::class, 'exportpdf'])
         ->name('exportpdf');
      Route::get('/exportexcel', [TransactionController::class, 'exportexcel'])
         ->name('exportexcel');
    });
Auth::routes();