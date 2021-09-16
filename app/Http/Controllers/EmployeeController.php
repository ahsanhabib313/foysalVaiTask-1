<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
     //show add employee page

     public function create(Request $request){
        return view('admin.addEmployee');
    }

    // store employee

    public function store(Request $request){


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

    public function show(Request $request){
        $employees = Employee::all();
        return view('admin.showEmployee', compact('employees'));
    }

    // edit employee
    public function edit(Request $request, $id){

        $employee = Employee::find($id);
        return view('admin.editEmployee', compact('employee'));

    }

    //update employee

    public function update(Request $request, $id){
        //validate the request field
         $request->validate([
            'name' => 'required',
            'post' => 'required',
            
        ]);

         // update data in database
         $employee =Employee::find($id);

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
             return redirect()->route('admin.show.employee')->with('success', 'Employee has been updated Successfully');
         }
 
 
    }

    //delete the employee

    public function destroy($id){
        // retireve the instance of employee
        $employee = Employee::find($id);
        //delete the emoloyee instance
        $delete = $employee->delete();

        //if employee deleted return back
        if($delete){
            return back()->with('success', 'Employee has been deleted Successfully');
        }
    }

}
