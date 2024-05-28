<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
//use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
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
Route::get('localization/{locale}',[LocalizationController::class, 'setLang']);

Route::get('/',[UserController::class, 'index'])->name('index');

Route::get('trading-platform',[UserController::class, 'trading'])->name('trading');
Route::prefix('market')->group(function () {
Route::get('forex',[UserController::class, 'forex'])->name('forex');
Route::get('stock',[UserController::class, 'stock'])->name('stock');
Route::get('CFDs',[UserController::class, 'cfd'])->name('cfd');
Route::get('indices',[UserController::class, 'indices'])->name('indices');
});
// Route::get('copy-trading',[UserController::class, 'copytrading'])->name('copytrading');
Route::get('about-us',[UserController::class, 'about'])->name('about');
Route::get('error',[UserController::class, 'error'])->name('error');
Route::get('terms-policies',[UserController::class, 'terms'])->name('terms');
//Route::post('contact', [CountryController::class, 'storeContact'])->name('contact.store');
Route::get('contact', [UserController::class, 'contact'])->name('contact');
Route::get('privacy-policy', [UserController::class, 'privacy'])->name('privacy');
Route::get('copy-trading-terms-policy', [UserController::class, 'copytradepolicy'])->name('copytradepolicy');
Route::get('disclosure-risk-warning', [UserController::class, 'disclosure'])->name('disclosure');
Route::post('contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('customer-agreement', [UserController::class, 'customer'])->name('customer');
Route::get('aml-policy', [UserController::class, 'pdf'])->name('pdf');

