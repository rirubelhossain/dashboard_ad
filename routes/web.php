<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route :: get('/',[AdminController::class,'adm']);
Route :: get('/form',[AdminController::class,'form'])->name('form.frm');
//customer data insert
Route :: post('/customer-post',[AdminController::class, 'customer_data_post'])->name('customer.post');
Route :: post('/customer-insert',[AdminController::class, 'customer_insert'])->name('insert.post');
Route :: post('/sub-category',[AdminController::class, 'subcate'])->name('sub.cate');
Route :: get('/post',function(){
    return view('customer.data_form');
});







///
Route :: get('/customer',function(){
    return view('customer.create');
});

Route ::get('/subcate', function(){

    return view('customer.sub_category');
});
