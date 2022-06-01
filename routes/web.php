<?php

use App\Http\Controllers\Backend\DataPengurus\PengurusController;
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

Route::get('/inventaris/create',function(){
    return view('backend.form_inventaris.index');
});

// Route::get('/datapengurus/create',function(){
//     return view('backend.form_datapengurus.index');
// });

Route::get('/dokumentasi/create',function(){
    return view('backend.form_dokumentasi.index');
});

Route::get('/masukkas/create',function(){
    return view('backend.form_masukkas.index');
});

Route::get('/keluarkas/create',function(){
    return view('backend.form_keluarkas.index');
});

Route::get('/profilmasjid/edit',function(){
    return view('backend.form_profilmasjid.index');
});

Route::get('/profilmasjid',function(){
    return view('backend.view_profilmasjid.index');
});

// Route::get('/datapengurus',function(){
//     return view('backend.datatable_datapengurus.index');
// });

Route::get('/inventaris',function(){
    return view('backend.datatable_inventaris.index');
});

Route::get('/dokumentasi',function(){
    return view('backend.datatable_dokumentasi.index');
});

Route::get('/',function(){
    return view('frontend.mainmenu.index');
});

//Route Resource Controller
Route::resource('/datapengurus', PengurusController::class);

//Rout Edit Controller
Route::get('/datapengurus/edit',function(){
    return view('backend.edit_datapengurus.index');
});
