<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceContactController;
use App\Http\Controllers\PartnerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');;
//Route::get('/',[\App\Http\Controllers\BlogController::class,'index']);
Route::get('/contact',[\App\Http\Controllers\ContactController::class,'index'])->name('contact.index');
Route::post('/contact',[\App\Http\Controllers\ContactController::class,'send'])->name('contact.send');;
Route::get('/technical',[\App\Http\Controllers\ContactController::class,'technical'])->name('technical');;
Route::post('/consultation', [ContactController::class, 'store'])->name('consultation.store');
Route::get('/stock',[\App\Http\Controllers\ProductController::class,'stock'])->name('stock');
Route::post('/stock/check',[\App\Http\Controllers\ProductController::class,'checkStock'])->name('stock.check');
Route::get('/product',[\App\Http\Controllers\ProductController::class,'index'])->name('product.index');;
Route::get('/blog',[\App\Http\Controllers\ProductController::class,'blog'])->name('blog.index');
Route::get('/blog/{slug}',[\App\Http\Controllers\ProductController::class,'blogDetail'])->name('blog.show');
Route::get('/about',[\App\Http\Controllers\AboutController::class,'index'])->name('about.index');;
Route::post('/service-contact', [ServiceContactController::class, 'store'])->name('service-contact.store');
Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
Route::get('/api/partners', [PartnerController::class, 'api'])->name('partners.api');
Route::post('/request-quote', [\App\Http\Controllers\ContactController::class, 'requestQuote'])->name('request-quote.store');
Route::post('/expert-contact', [\App\Http\Controllers\ContactController::class, 'expertContact'])->name('expert-contact.store');

