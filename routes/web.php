<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReController;
use App\Http\Controllers\DocController;

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

Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:manager'])->group(function () {
   
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});


route::resource('/ndoc', DocController::class);
route::resource('/nre', ReController::class);
route::get('/nre/edit', [ReController::class,'edit']);
route::get('/nre/show', [ReController::class,'show']);
route::get('/nre/index', [ReController::class,'index']);

route::get('/ndoc/show', [DocController::class,'show']);
route::get('/ndoc/index', [DocController::class,'index']);
route::get('/ndoc/edit', [DocController::class,'edit']);



Route::get('/home/nre/index', function()  {
    route::get('/home/nre/index', [ReController::class,'index']);
    return view('nre/');
    
});

Route::get('/admin/home/ndoc/index', function()  {
    route::get('/admin/home/ndoc/index', [DocController::class,'index']);
    return view('ndoc/index');
    
});




Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    route::get('/home/nre/index', [ReController::class,'index']);

});
Route::get('/admin/home/ndoc/index', function()  {
    route::get('/admin/home/ndoc/index', [DocController::class,'index']);
    return view('ndoc/index');
    
});