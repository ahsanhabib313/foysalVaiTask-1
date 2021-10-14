<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\AdvertiseLogoController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\CommitteeMemberController;

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
Route::get('/show/committee/member/{id}', [CommitteeMemberController::class, 'showCommitteeMember'])->name('show.committee.member');

//Registered member route
Route::get('/member', [HomeController::class, 'showMemberForm'])->name('show.member.form');
Route::get('registered/member', [MemberController::class, 'searchIndex'])->name('search.registered.member');
Route::post('registered/member', [MemberController::class, 'search'])->name('search.registered.member');


//file download route

Route::get('download/curriculum/{file}',[DownloadController::class, 'downloadCurriculum'])->name('download.curriculum');
Route::get('download/recentNews/{file}',[DownloadController::class, 'downloadRecentNews'])->name('download.recentNews');

//contact page route
Route::get('contact',[HomeController::class, 'contact'])->name('contact');


Route::middleware(['guest'])->group(function () {
    
  /**  Admin routes **/
    Route::prefix('admin')->group(function(){
      //Authentication route
      Route::get('/login', [LoginController::class, 'index']);
      Route::post('user/login', [LoginController::class, 'login'])->name('user.login');
      //Route::get('/register', [RegisterController::class, 'index']);
     // Route::post('/user/register', [RegisterController::class, 'register'])->name('user.register');

    
    });
});

 Route::middleware(['auth','preventBackHistory'])->group(function () {

    Route::prefix('admin')->group(function(){

      Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
      Route::get('/show/employee', [EmployeeController::class, 'show'])->name('admin.show.employee');
      Route::get('/show/slide/photo', [SlidePhotoController::class, 'show'])->name('admin.show.slide.photo');
      Route::get('/show/student', [StudentController::class, 'showStudent'])->name('admin.show.student');
      Route::get('/show/active/student', [StudentController::class, 'showActiveStudent'])->name('admin.show.active.student');
      Route::get('/show/member', [MemberController::class, 'show'])->name('admin.show.member');
      Route::get('/show/active/member', [MemberController::class, 'showActiveMember'])->name('admin.show.active.member');
      Route::get('/show/recent/news', [RecentNewsController::class, 'show'])->name('admin.show.recent.news');
      Route::get('/show/curriculum', [CurriculumController::class, 'show'])->name('admin.show.curriculum');
      Route::get('show/address/', [AddressController::class, 'show'])->name('admin.show.address');
      Route::get('show/notice', [NoticeController::class, 'show'])->name('admin.show.notice');
      Route::get('/show/course/', [CourseController::class, 'show'])->name('admin.show.course');
      Route::get('/show/office/location', [OfficeLocationController::class, 'show'])->name('admin.show.office.location');
      Route::get('/show/advertising/logo', [AdvertiseLogoController::class, 'show'])->name('admin.show.advertising.logo');
      Route::get('/show/branch', [BranchController::class, 'show'])->name('admin.show.branch');

       /*******committee route ********/
       Route::resource('committee', CommitteeController::class)->only([
        'index'
      ]);

       /*******committee member route ********/
       Route::resource('committeeMember', CommitteeMemberController::class)->only([
         'index'
       ]);

       //logout route
       Route::get('/logout', [LogoutController::class, 'logout'])->name('logout'); 

    });

}); 

  
    Route::middleware(['auth','IsSuperAdmin','preventBackHistory'])->group(function () {

      Route::prefix('admin')->group(function(){ 
     
        

         
         /**********employee route*********/
         Route::get('/create/employee', [EmployeeController::class, 'create'])->name('admin.add.employee');
         Route::post('/store/employee', [EmployeeController::class, 'store'])->name('store.employee');

         Route::get('/edit/employee/{id}', [EmployeeController::class, 'edit'])->name('admin.edit.employee');
         Route::post('/update/employee/{id}',[EmployeeController::class, 'update'])->name('admin.update.employee');
         Route::get('/delete/employee/{id}',[EmployeeController::class, 'destroy'])->name('admin.delete.employee');
         

         /**********employee route*********/
         Route::get('/create/slide/photo', [SlidePhotoController::class, 'create'])->name('admin.add.slide.photo');
         Route::post('/store/slide/photo', [SlidePhotoController::class, 'store'])->name('admin.store.slide.photo');
       
         Route::get('/edit/slide/photo/{id}', [SlidePhotoController::class, 'edit'])->name('admin.edit.slide.photo');
         Route::post('/update/slide/photo/{id}', [SlidePhotoController::class, 'update'])->name('admin.update.slide.photo');
         Route::get('/destroy/slide/photo/{id}', [SlidePhotoController::class, 'destroy'])->name('admin.destroy.slide.photo');
        
        
         /**********students route*********/
        
       /*   Route::get('/student/active/{id}', [StudentController::class, 'activeStudent'])->name('admin.active.student');
         Route::get('/student/edit/{registrationNum}', [StudentController::class, 'edit'])->name('admin.student.edit');
         Route::post('/student/update/{registrationNum}', [StudentController::class, 'update'])->name('admin.student.update');
         Route::get('/student/delete/{registrationNum}', [StudentController::class, 'destroy'])->name('admin.student.delete'); */



        /**********member route*********/
       
        Route::get('admin/add/registrationNum/{id}', [MemberController::class, 'addRegistrationNum'])->name('admin.add.registration.number');
        Route::post('admin/store/registrationNum/{id}', [MemberController::class, 'storeRegistrationNum'])->name('admin.store.registration.number');
        Route::get('/member/active/{id}', [MemberController::class, 'active'])->name('admin.active.member');
        Route::get('/member/edit/{registrationNum}', [MemberController::class, 'edit'])->name('admin.member.edit');
         Route::post('/member/update/{registrationNum}', [MemberController::class, 'update'])->name('admin.member.update');
         Route::get('/member/delete/{registrationNum}', [MemberController::class, 'destroy'])->name('admin.member.delete');
  
     
    
       
         /**********recent news route*********/
         Route::get('/create/recent/news/show', [RecentNewsController::class, 'create'])->name('admin.create.recent.news');
         Route::post('/store/recent/news/', [RecentNewsController::class, 'store'])->name('admin.store.recent.news');
        
         Route::get('/edit/recent/news/{id}', [RecentNewsController::class, 'edit'])->name('admin.edit.recent.news');
         Route::post('/update/recent/news/{id}', [RecentNewsController::class, 'update'])->name('admin.update.recent.news');
         Route::get('/delete/recent/news/{id}', [RecentNewsController::class, 'destroy'])->name('admin.delete.recent.news');

        
         /**********curriculum route*********/
         Route::get('create/curriculum/', [CurriculumController::class, 'create'])->name('admin.add.curriculum.show');
         Route::post('store/curriculum/', [CurriculumController::class, 'store'])->name('admin.store.curriculum');
        
         Route::get('/edit/curriculum/{id}', [CurriculumController::class, 'edit'])->name('admin.edit.curriculum');
         Route::post('/update/curriculum/{id}', [CurriculumController::class, 'update'])->name('admin.update.curriculum');
         Route::get('/delete/curriculum/{id}', [CurriculumController::class, 'destroy'])->name('admin.delete.curriculum');
        

        
        /**********address route*********/
         Route::get('create/address/', [AddressController::class, 'create'])->name('admin.add.address.show');
         Route::post('store/address/', [AddressController::class, 'store'])->name('admin.store.address');
        
         Route::get('edit/address/{id}', [AddressController::class, 'edit'])->name('admin.edit.address');
         Route::post('update/address/{id}', [AddressController::class, 'update'])->name('admin.update.address');
         Route::get('delete/address/{id}', [AddressController::class, 'destroy'])->name('admin.delete.address');
         

         /**********notice route*********/
         Route::get('/create/notice/', [NoticeController::class, 'create'])->name('admin.add.notice.show');
         Route::post('/store/notice/', [NoticeController::class, 'store'])->name('admin.store.notice');
         
         Route::get('/edit/notice/{id}', [NoticeController::class, 'edit'])->name('admin.edit.notice');
         Route::post('update/notice/{id}', [NoticeController::class, 'update'])->name('admin.update.notice');
         Route::get('delete/notice/{id}', [NoticeController::class, 'destroy'])->name('admin.delete.notice');



         /**********course route*********/
         Route::get('/create/course/', [CourseController::class, 'create'])->name('admin.create.course');
         Route::post('/store/course/', [CourseController::class, 'store'])->name('admin.store.course');
        
         Route::get('edit/course/{id}', [CourseController::class, 'edit'])->name('admin.edit.course');
         Route::post('update/course/{id}', [CourseController::class, 'update'])->name('admin.update.course');
         Route::get('delete/course/{id}', [CourseController::class, 'destroy'])->name('admin.delete.course');


         /**********offcie location route*********/
         Route::get('/create/office/location', [OfficeLocationController::class, 'create'])->name('admin.create.office.location');
         Route::post('/store/office/location', [OfficeLocationController::class, 'store'])->name('admin.store.office.location');
        
         Route::get('/edit/office/location/{id}', [OfficeLocationController::class, 'edit'])->name('admin.edit.office.location');
         Route::post('/update/office/location/{id}', [OfficeLocationController::class, 'update'])->name('admin.update.office.location');
         Route::get('/delete/office/location/{id}', [OfficeLocationController::class, 'destroy'])->name('admin.delete.office.location');



         /************advertise logo  **********/
         Route::get('/create/advertising/logo', [AdvertiseLogoController::class, 'create'])->name('admin.create.advertising.logo');
         Route::post('/store/advertising/logo', [AdvertiseLogoController::class, 'store'])->name('admin.store.advertising.logo');
        
         Route::get('/edit/advertising/logo/{id}', [AdvertiseLogoController::class, 'edit'])->name('admin.edit.advertising.logo');
         Route::post('/update/advertising/logo/{id}', [AdvertiseLogoController::class, 'update'])->name('admin.update.advertising.logo');
         Route::get('/delete/advertising/logo/{id}', [AdvertiseLogoController::class, 'destroy'])->name('admin.delete.advertising.logo');

         /*********** branch route  ***********/
         Route::get('/create/branch', [BranchController::class, 'create'])->name('admin.create.branch');
         Route::post('/store/branch', [BranchController::class, 'store'])->name('admin.store.branch');
        
         Route::get('/edit/branch/{id}', [BranchController::class, 'edit'])->name('admin.edit.branch');
         Route::post('/update/branch/{id}', [BranchController::class, 'update'])->name('admin.update.branch');
         Route::get('/delete/branch/{id}', [BranchController::class, 'destroy'])->name('admin.delete.branch');

         /*******committee route ********/
        Route::resource('committee', CommitteeController::class)->except([
          'index'
        ]);
         /*******committee member route ********/
         Route::resource('committeeMember', CommitteeMemberController::class)->except([
          'index'
        ]);;
        
    });

 });

