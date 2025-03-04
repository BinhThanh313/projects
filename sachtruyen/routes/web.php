<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', [IndexController::class, 'home']);
Route::get('/danh-muc/{slug}', [IndexController::class, 'danhmuc']);
Route::get('/xem-truyen/{slug}', [IndexController::class, 'xemtruyen'])->name('xem-truyen');
Route::get('/xem-chapter/{slug}', [IndexController::class, 'xemchapter'])->name('xem-chapter');
Route::get('/tim-kiem', [IndexController::class, 'timkiem'])->name('tim-kiem');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/truyen-list', [AdminController::class, 'indexTruyen'])->name('admin.truyen.index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/danhmuc', DanhMucController::class);
Route::resource('/truyen', TruyenController::class);
Route::resource('/chapter', ChapterController::class);