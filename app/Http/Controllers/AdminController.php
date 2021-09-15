<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\RecentNews;
use App\Models\Employee;
use App\Models\BranchName;
use App\Models\CurriCulum;
use App\Models\SliderPhoto;
use App\Models\User;
use App\Models\Address;
use App\Models\Notice;

class AdminController extends Controller
{
    //show the index page

    public function index(Request $request){
       
        return view('admin.index');
    }

    //show add employee page

    public function addEmployee(Request $request){
        return view('admin.addEmployee');
    }

    // store employee

    public function storeEmployee(Request $request){


        //validate the request 
        $request->validate([
            'name' => 'required',
            'post' => 'required',
            'photo' => 'required|image|mimes:jpg, jpeg,png'
        ]);

        // save data in database
        $employee = new Employee;

        $employee->name = $request->name;
        $employee->post = $request->post;

        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('img/employee');
            $image->move($path, $imageName);
            $employee->photo = $imageName;
        }

        $save = $employee->save();
        if($save){
            return back()->with('success', 'Employee has been created Successfully');
        }



    }

    //  show employee list 

    public function showEmployee(Request $request){
        $employees = Employee::all();
        return view('admin.showEmployee', compact('employees'));
    }

    // edit employee
    public function editEmployee(Request $request){
        return view('admin.editEmployee');

    }

    //show add slide photo page

    public function addSlidePhoto(Request $request){

        return view('admin.addSlidePhoto');
    }

    //show slide photo lists

    public function showSlidePhoto(Request $request){
        return view('admin.showSlidePhoto');
    }


    // show the students that are Pending

     public function showStudent(Request $request){
         $students = Student::where('status', 0)->get();
         return view('admin.showStudent', compact('students'));
     }

     // active the pending students

     public function activeStudent($id){

         $updated = Student::where('id', $id)
                            ->update([
                                'status' => 1
                            ]);

        $student = Student::where('id', $id)->first();
         if($updated){
             return back()->with('success', 'Student Registration Activated succesfully with Registration number '.$student->registrationNum.'.');
         }
     }

     //add recent news show page 

     public function addRecentNewsShow(){
         return view('admin.addRecentNews');
     }

     //show rcent news 

     public function showRecentNews(){
        $recentNews = RecentNews::all();
        return view('admin.ShowRecentNews');
     }

     // add curriculum 

     public function addCurriculum(){
         return view('admin.addCurriculum');
     }
     
     //show curriculum

     public function showCurriculum(){
         return view('admin.showCurriculum');
     }

     //Add address

     public function addAddress(){
         return view('admin.addAddress');
     }

     //show address

     public function showAddress(){
         return view('admin.showAddress');
     }


     //add notice function

     public function addNotice(){
         return view('admin.addNotice');
     }

     //show notice 

     public function showNotice(){
         return view('admin.showNotice');
     }
   
}
