<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoticeController;
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

route::get('/category',[CategoryController::class,'index'])->name('category.index');
route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category',[CategoryController::class,'store'])->name('category.store');
route::get('/category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
route::post('/category/{id}/update',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/{id}/destroy',[CategoryController::class,'destroy'])->name('category.destroy');

// end of route category


// Route of Notices

Route::get('/notice',[NoticeController::class,'index'])->name('notice.index');
route::get('/notice/create',[NoticeController::class,'create'])->name('notice.create');
Route::post('/notice',[NoticeController::class,'store'])->name('notice.store');
route::get('/notice/{id}/edit',[NoticeController::class,'edit'])->name('notice.edit');
route::post('/notice/{id}/update',[NoticeController::class,'update'])->name('notice.update');
Route::get('/category/{id}/destroy',[NoticeController::class,'destroy'])->name('notice.destroy');

// end of route notice






    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




});





require __DIR__.'/auth.php';
