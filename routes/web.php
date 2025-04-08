<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

route::get('/', function(){
    return view('index');
})->name("home");
route::get('/article/post',function(){
    return view('art');
})->name('article');


Route::get('/admin/cat', [CategoryController::class,'index'])->name('admin.cat');
//redirect to create page
Route::get('/admin/create', [CategoryController::class,'create'])->name('admin.cat.create');
// insert data into database
Route::POST('/admin/store', [CategoryController::class,'store'])->name('admin.cat.store');
//redirect to edit page
Route::get('/admin/edit/{id}', [CategoryController::class,'edit'])->name('admin.cat.edit');
// get update 
Route::PUT('/admin/update/{id}', [CategoryController::class,'update'])->name('admin.cat.update');
