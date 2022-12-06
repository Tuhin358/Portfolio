<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\ServicePagesController;
use App\Http\Controllers\PortfolioPagesController;
use App\Http\Controllers\AboutPagesController;
use App\Http\Controllers\ContactFormController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//          return view('pages.index');
//     });

 Auth::routes();

//  Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/',[PagesController::class,'index'])->name('index');


Route::prefix('admin')->group(function(){

Route::get('/dashboard',[MainPagesController::class,'dashboard'])->name('admin.dashboard');

Route::get('/main',[MainPagesController::class,'index'])->name('main');
Route::put('/main',[MainPagesController::class,'update'])->name('main.update');

Route::get('/services/create',[ServicePagesController::class,'create'])->name('admin.services.create');
Route::post('/services/create',[ServicePagesController::class,'store'])->name('admin.services.store');
Route::get('/services/list',[ServicePagesController::class,'list'])->name('admin.services.list');
Route::get('/services/edit/{id}',[ServicePagesController::class,'edit'])->name('admin.services.edit');

Route::post('/services/update/{id}',[ServicePagesController::class,'update'])->name('admin.services.update');
Route::delete('/services/destroy/{id}',[ServicePagesController::class,'destroy'])->name('admin.services.destroy');

});


Route::controller(PortfolioPagesController::class)->group(function(){

Route::get('admin/portfolios/create','create')->name('admin.portfolios.create');
Route::put('admin/portfolios/create','store')->name('admin.portfolios.store');
Route::get('admin/portfolios/list','list')->name('admin.portfolios.list');
Route::get('/portfolios/edit/{id}','edit')->name('admin.portfolios.edit');

Route::post('admin/portfolios/update/{id}','update')->name('admin.portfolios.update');
Route::delete('admin/portfolios/destroy/{id}','destroy')->name('admin.portfolios.destroy');


});

Route::controller(AboutPagesController::class)->group(function(){

    Route::get('admin/abouts/create','create')->name('admin.abouts.create');
    Route::put('admin/abouts/create','store')->name('admin.abouts.store');
    Route::get('admin/abouts/list','list')->name('admin.abouts.list');
    Route::get('/abouts/edit/{id}','edit')->name('admin.abouts.edit');

    Route::post('admin/abouts/update/{id}','update')->name('admin.abouts.update');
    Route::delete('admin/abouts/destroy/{id}','destroy')->name('admin.abouts.destroy');


    });

Route::post('/contact',[ContactFormController::class,'store'])->name('contact.store');








