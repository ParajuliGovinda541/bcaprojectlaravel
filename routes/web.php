<?php
use App\Http\Controllers\ProductController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\GalleryController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');









Route::middleware('auth')->group(function () {

// Route of category

Route::middleware('isadmin')->group(function () {


route::get('/category',[CategoryController::class,'index'])->name('category.index');
route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category',[CategoryController::class,'store'])->name('category.store');
route::get('/category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
route::post('/category/{id}/update',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/{id}/destroy',[CategoryController::class,'destroy'])->name('category.destroy');

// end of route category
});

// Route of Notices

Route::get('/notice',[NoticeController::class,'index'])->name('notice.index');
route::get('/notice/create',[NoticeController::class,'create'])->name('notice.create');
Route::post('/notice',[NoticeController::class,'store'])->name('notice.store');
route::get('/notice/{id}/edit',[NoticeController::class,'edit'])->name('notice.edit');
route::post('/notice/{id}/update',[NoticeController::class,'update'])->name('notice.update');
Route::get('/notice/{id}/destroy',[NoticeController::class,'destroy'])->name('notice.destroy');



//route for gallery controller
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery.index');
route::get('/gallery/create',[GalleryController::class,'create'])->name('gallery.create');
Route::post('/gallery',[GalleryController::class,'store'])->name('gallery.store');
route::get('/gallery/{id}/edit',[GalleryController::class,'edit'])->name('gallery.edit');
route::post('/gallery/{id}/update',[GalleryController::class,'update'])->name('gallery.update');
Route::get('/gallery/{id}/destroy',[GalleryController::class,'destroy'])->name('gallery.destroy');


// end of route gallery



//route for product controller
Route::get('/product',[ProductController::class,'index'])->name('product.index');
route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');
route::get('/product/{id}/edit',[ProductController::class,'edit'])->name('product.edit');
route::post('/product/{id}/update',[ProductController::class,'update'])->name('product.update');
Route::get('product/{id}/destroy',[ProductController::class,'destroy'])->name('product.destroy');


// end of route product










    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




});





require __DIR__.'/auth.php';

