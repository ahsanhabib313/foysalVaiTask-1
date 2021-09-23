<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SlidePhotoController;
use App\Http\Controllers\RecentNewsController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\OfficeLocationController;
use App\Http\Controllers\MemberController;

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
Route::get('/member', [HomeController::class, 'showMemberForm'])->name('show.member.form');


/**  Admin routes **/
Route::prefix('admin')->group(function(){

    Route::view('/login', 'admin.login');
    Route::view('/register', 'admin.register');
  
    Route::middleware(['web'])->group(function () {

     
         Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

         
         /**********employee route*********/
         Route::get('/add/employee', [EmployeeController::class, 'create'])->name('admin.add.employee');
         Route::post('/store/employee', [EmployeeController::class, 'store'])->name('store.employee');
         Route::get('/show/employee', [EmployeeController::class, 'show'])->name('admin.show.employee');
         Route::get('/edit/employee/{id}', [EmployeeController::class, 'edit'])->name('admin.edit.employee');
         Route::post('/update/employee/{id}',[EmployeeController::class, 'update'])->name('admin.update.employee');
         Route::get('/delete/employee/{id}',[EmployeeController::class, 'destroy'])->name('admin.delete.employee');
         

         /**********employee route*********/
         Route::get('/add/slide/photo', [SlidePhotoController::class, 'create'])->name('admin.add.slide.photo');
         Route::post('/store/slide/photo', [SlidePhotoController::class, 'store'])->name('admin.store.slide.photo');
         Route::get('/show/slide/photo', [SlidePhotoController::class, 'show'])->name('admin.show.slide.photo');
         Route::get('/destroy/slide/photo/{id}', [SlidePhotoController::class, 'destroy'])->name('admin.destroy.slide.photo');
        
        
         /**********students route*********/
         Route::get('/show/student', [StudentController::class, 'showStudent'])->name('admin.show.student');
         Route::get('/student/active/{id}', [StudentController::class, 'activeStudent'])->name('admin.active.student');



       /**********student route*********/
       Route::get('/show/member', [MemberController::class, 'show'])->name('admin.show.member');
       Route::get('/member/active/{id}', [MemberController::class, 'active'])->name('admin.active.member');
  
     
    
       
         /**********recent news route*********/
         Route::get('/add/recent/news/show', [RecentNewsController::class, 'create'])->name('admin.create.recent.news');
         Route::post('/store/recent/news/', [RecentNewsController::class, 'store'])->name('admin.store.recent.news');
         Route::get('/show/recent/news', [RecentNewsController::class, 'show'])->name('admin.show.recent.news');
         Route::get('/edit/recent/news/{id}', [RecentNewsController::class, 'edit'])->name('admin.edit.recent.news');
         Route::post('/update/recent/news/{id}', [RecentNewsController::class, 'update'])->name('admin.update.recent.news');
         Route::get('/delete/recent/news/{id}', [RecentNewsController::class, 'destroy'])->name('admin.delete.recent.news');

        
         /**********curriculum route*********/
         Route::get('create/curriculum/', [CurriculumController::class, 'create'])->name('admin.add.curriculum.show');
         Route::post('store/curriculum/', [CurriculumController::class, 'store'])->name('admin.store.curriculum');
         Route::get('/show/curriculum', [CurriculumController::class, 'show'])->name('admin.show.curriculum');
         Route::get('/edit/curriculum/{id}', [CurriculumController::class, 'edit'])->name('admin.edit.curriculum');
         Route::post('/update/curriculum/{id}', [CurriculumController::class, 'update'])->name('admin.update.curriculum');
         Route::get('/delete/curriculum/{id}', [CurriculumController::class, 'destroy'])->name('admin.delete.curriculum');
        

        
        /**********address route*********/
         Route::get('create/address/', [AddressController::class, 'create'])->name('admin.add.address.show');
         Route::post('store/address/', [AddressController::class, 'store'])->name('admin.store.address');
         Route::get('show/address/', [AddressController::class, 'show'])->name('admin.show.address');
         Route::get('edit/address/{id}', [AddressController::class, 'edit'])->name('admin.edit.address');
         Route::post('update/address/{id}', [AddressController::class, 'update'])->name('admin.update.address');
         Route::get('delete/address/{id}', [AddressController::class, 'destroy'])->name('admin.delete.address');
         

         /**********notice route*********/
         Route::get('/create/notice/', [NoticeController::class, 'create'])->name('admin.add.notice.show');
         Route::post('/store/notice/', [NoticeController::class, 'store'])->name('admin.store.notice');
         Route::get('show/notice', [NoticeController::class, 'show'])->name('admin.show.notice');
         Route::get('/edit/notice/{id}', [NoticeController::class, 'edit'])->name('admin.edit.notice');
         Route::post('update/notice/{id}', [NoticeController::class, 'update'])->name('admin.update.notice');
         Route::get('delete/notice/{id}', [NoticeController::class, 'destroy'])->name('admin.delete.notice');



         /**********course route*********/
         Route::get('/create/course/', [CourseController::class, 'create'])->name('admin.create.course');
         Route::post('/store/course/', [CourseController::class, 'store'])->name('admin.store.course');
         Route::get('/show/course/', [CourseController::class, 'show'])->name('admin.show.course');
         Route::get('edit/course/{id}', [CourseController::class, 'edit'])->name('admin.edit.course');
         Route::post('update/course/{id}', [CourseController::class, 'update'])->name('admin.update.course');
         Route::get('delete/course/{id}', [CourseController::class, 'destroy'])->name('admin.delete.course');


         /**********offcie location route*********/
         Route::get('/create/office/location', [OfficeLocationController::class, 'create'])->name('admin.create.office.location');
         Route::post('/store/office/location', [OfficeLocationController::class, 'store'])->name('admin.store.office.location');
         Route::get('/show/office/location', [OfficeLocationController::class, 'show'])->name('admin.show.office.location');
         Route::get('/edit/office/location/{id}', [OfficeLocationController::class, 'edit'])->name('admin.edit.office.location');
         Route::post('/update/office/location/{id}', [OfficeLocationController::class, 'update'])->name('admin.update.office.location');
    });

 });

