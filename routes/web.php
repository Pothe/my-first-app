<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;



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
Route::DELETE('/admin/delete/{id}', [CategoryController::class,'destroy'])->name('admin.cat.destroy');
// tags routes
Route::get('/admin/tags', [TagsController::class, 'index'])->name('admin.tags');
Route::get('/admin/tags/create', [TagsController::class, 'create'])->name('admin.tag.create');
Route::post('/admin/tags/create', [TagsController::class, 'store'])->name('admin.tag.store');
Route::get('/admin/tags/edit/{id}', [TagsController::class, 'edit'])->name('admin.tag.edit');
Route::PUT('/admin/tags/update/{id}', [TagsController::class, 'update'])->name('admin.tag.update');
Route::Delete('/admin/tags/destroy/{id}', [TagsController::class, 'destroy'])->name('admin.tag.destroy');
// post 
Route::get('/admin/post', [PostController::class,'index'])->name('admin.posts');
Route::get('/admin/post/create', [PostController::class, 'create'])->name('admin.post.create');
Route::post('/admin/post/store', [PostController::class, 'store'])->name('admin.post.store');
// Route::get('/admin/tags/edit/{id}', [TagsController::class, 'edit'])->name('admin.tag.edit');
// Route::PUT('/admin/tags/update/{id}', [TagsController::class, 'update'])->name('admin.tag.update');
// Route::Delete('/admin/tags/destroy/{id}', [TagsController::class, 'destroy'])->name('admin.tag.destroy');