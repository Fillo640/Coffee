<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactUsFormController;

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
// controller homepage
Route::get('/', [PublicController::class,'homepage'])->name('homepage');
// rotte per contatto
Route::get('/contact',[PublicController::class,'contactMe'])->name('contattami');
Route::post('/submit-contact',[PublicController::class,'contactSubmit'])->name('invio.contatto');
// rotta lingua
Route::post('/locale/{locale}', [PublicController::class,'locale'])->name('locale');