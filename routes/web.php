<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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
    Voyager::routes();
});

Route::get('sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('{slug}', [PageController::class,'index'])->name('page');
Route::get('hizmet/{slug}', [PageController::class,'detail'])->name('service');
Route::get('proje/{slug}', [PageController::class,'detail'])->name('project');
Route::get('blog/{slug}', [PageController::class,'detail'])->name('blog');

Route::post('store', [PageController::class, 'store'])->name('store');

