<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\RecentNews;

use App\Models\BranchName;
use App\Models\CurriCulum;
use App\Models\SliderPhoto;
use App\Models\User;
use App\Models\Address;
use App\Models\Notice;

class AdminController extends Controller
{
    //show the index page

    public function dashboard(Request $request){
       
        return view('admin.dashboard');
    }

     // add curriculum 

     public function addCurriculum(){
        
     }
     
     //show curriculum

     public function showCurriculum(){
        
     }

     //add notice function

     public function addNotice(){
        
     }

     //show notice 

     public function showNotice(){
        
     }
   
}
