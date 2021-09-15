<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/home',[HomeController::class, 'index'] )->name('home');
Route::get('/admission', [HomeController::class, 'showAdmissionForm'])->name('show.admission.form');


/**  Admin routes **/
Route::prefix('admin')->group(function(){

    Route::view('/login', 'admin.login');
    Route::view('/register', 'admin.register');
  
    Route::middleware(['web'])->group(function () {

     
         Route::get('/index', [AdminController::class, 'index'])->name('admin.index');
         Route::get('/add/employee', [AdminController::class, 'addEmployee'])->name('admin.add.employee');
         Route::post('/store/employee', [AdminController::class, 'storeEmployee'])->name('store.employee');
         Route::get('/show/employee', [AdminController::class, 'showEmployee'])->name('admin.show.employee');
         Route::get('/edit/employee', [AdminController::class, 'editEmployee'])->name('admin.edit.employee');
         Route::get('/add/slide/photo', [AdminController::class, 'addSlidePhoto'])->name('admin.add.slide.photo');
         Route::get('/show/slide/photo', [AdminController::class, 'showSlidePhoto'])->name('admin.show.slide.photo');
         Route::get('/show/student', [AdminController::class, 'showStudent'])->name('admin.show.student');
         Route::get('/student/active/{id}', [AdminController::class, 'activeStudent'])->name('admin.active.student');
         Route::get('/add/recent/news/show', [AdminController::class, 'addRecentNewsShow'])->name('admin.add.recent.news.show');
         Route::get('/show/recent/news', [AdminController::class, 'showRecentNews'])->name('admin.show.recent.news');
         Route::get('add/curriculum/show', [AdminController::class, 'addCurriculum'])->name('admin.add.curriculum.show');
         Route::get('/show/curriculum', [AdminController::class, 'showCurriculum'])->name('admin.show.curriculum');
         Route::get('add/address/show', [AdminController::class, 'addAddress'])->name('admin.add.address.show');
         Route::get('admin/show/address', [AdminController::class, 'showAddress'])->name('admin.show.address');
         Route::get('admin/add/notice/show', [AdminController::class, 'addNotice'])->name('admin.add.notice.show');
         Route::get('admin/show/notice', [AdminController::class, 'showNotice'])->name('admin.show.notice');


    });

 });

