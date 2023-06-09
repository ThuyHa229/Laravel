<?php

use App\Http\Controllers\hello;
use App\Http\Controllers\PageController;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\testslidecontroller;
// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Schema;
/*
|--------------------------------------------------------------------------
| Web Routes định hướng đường dẫn
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
Route::get('/add', function () {
    return view('add');
});

Route::get('/welcome', function(){
    return 'Chào mừng các bạn đã đến với PNV';
});
Route::get('/',[App\Http\Controllers\hello::class,'xinchao']);
Route::get('/',[App\Http\Controllers\studentcontroller::class,'getStudent']);

Route::get('sum', [App\Http\Controllers\SumController::class, 'index']);
Route::post('sum', [App\Http\Controllers\SumController::class, 'Summ']);

Route::get('AreaOfShape', [App\Http\Controllers\AreaController::class, 'index']);
Route::post('AreaOfShape', [App\Http\Controllers\AreaController::class, 'Area']);
Route::get('covid',[App\Http\Controllers\covid::class,'index']);

Route::get('form',[App\Http\Controllers\singupController::class,'index']);
Route::post('form',[App\Http\Controllers\singupController::class,'displayInfor']);

// Route::get('master', [PageController::class, 'index']);

// Route::get('database',function(){
//     Schema::create('loaisp',function($table){
//         $table -> increments('id');
//         $table -> string('ten',200);
//     });
//     echo "Đã thực hiện thành công";
// });

Route::get('addrooms',[App\Http\Controllers\addroomscontroller::class,'index']);
Route::post('addrooms',[App\Http\Controllers\addroomscontroller::class,'showrooms']);

Route::get('/master',[App\Http\Controllers\PageController::class,'getIndex']);
Route::post('/master',[App\Http\Controllers\PageController::class,'getIndex']);

Route::get('/detail/{id}',[App\Http\Controllers\PageController::class,'getDetail']);
Route::get('/type/{id}', [App\Http\Controllers\PageController::class,'getLoaiSp']);

Route::get('/admin', [App\Http\Controllers\PageController::class, 'getIndexAdmin']);											
Route::get('/admin-add-form', [App\Http\Controllers\PageController::class, 'getAdminAdd'])->name('add-product');														
Route::post('/admin-add-form', [App\Http\Controllers\PageController::class, 'postAdminAdd']);		
Route::get('/admin-edit-form/{id}', [App\Http\Controllers\PageController::class, 'getAdminEdit']);													

Route::post('/admin-edit-form/{id}',[App\Http\Controllers\PageController::class, 'postAdminEdit']);


Route::post('/admin-delete/{id}', [App\Http\Controllers\PageController::class, 'postAdminDelete']);														

Route::get('/register', function () 
{return view('Page.register');});			

Route::post('/register',[App\Http\Controllers\UserController::class,'Register']);

Route::get('/login',function(){
    return view('Page.login');
});

Route::post('/login',[App\Http\Controllers\UserController::class,'Login']);

Route::get('/logout',[App\Http\Controllers\UserController::class,'Logout']);

Route::get('add-to-cart/{id}', [App\Http\Controllers\PageController::class, 'getAddToCart'])->name('themgiohang');		

Route::get('del-cart/{id}', [App\Http\Controllers\PageController::class, 'getDelItemCart'])->name('xoagiohang');											
											
Route::get('check-out', [App\Http\Controllers\PageController::class, 'getCheckout'])->name('dathang');		
		
Route::post('check-out', [App\Http\Controllers\PageController::class, 'postCheckout'])->name('dathang');	

Route::post('/checkout', [App\Http\Controllers\PageController::class, 'postCheckout'] )->name('checkout');

