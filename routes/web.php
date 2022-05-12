<?php

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

// Route::get('/dashboard', function () {
//     return view('backend.home.index');
// });

Route::get('/dashboard',[App\Http\Controllers\Backend\Home\HomeController::class,'index'])->name('dashboard.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/finventaris',function(){
    return view('backend.finventaris.index');
});

Route::get('/fdatapengurus',function(){
    return view('backend.fdatapengurus.index');
});

Route::get('/fdokumentasi',function(){
    return view('backend.fdokumentasi.index');
});

Route::get('/fmasukkas',function(){
    return view('backend.fmasukkas.index');
});

Route::get('/fkeluarkas',function(){
    return view('backend.fkeluarkas.index');
});

Route::get('/fprofilmasjid',function(){
    return view('backend.fprofilmasjid.index');
});

Route::get('/vprofilmasjid',function(){
    return view('backend.vprofilmasjid.index');
});

Route::get('/vtdatapengurus',function(){
    return view('backend.vtdatapengurus.index');
});
