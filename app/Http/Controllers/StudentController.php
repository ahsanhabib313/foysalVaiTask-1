<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

       // show the students that are Pending

       public function showStudent(Request $request){

        $students = Student::where('status', 0)->get();

        return view('admin.showStudent', compact('students'));
    }


       // show the students those are active

       public function showActiveStudent(Request $request){

        $students = Student::where('status', 1)->get();

        return view('admin.showActiveStudent', compact('students'));
    }

    // active the pending students

    public function activeStudent($id){

        $updated = Student::where('id', $id)
                           ->update([
                               'status' => 1
                           ]);

       $student = Student::where('id', $id)->first();

        if($updated){
            return back()->with('success', 'Student Registration Activated succesfully with Registration number '.$student->registrationNum.' and Personal Number: '.$student->mobile);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, $registrationNum)
    {
        //retrieve the stident data
        $student = Student::where('registrationNum', $registrationNum)->first();

        return view('admin.editStudent', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student, $registrationNum)
    {
            //validate the student filed
            $request->validate([

                'firstName' => 'required|string',
                'lastName' => 'required|string',
                'fatherName' => 'required|string',
                'motherName' => 'required|string',
                'email' => 'required',
                'mobile' => 'required',
                'nid' => 'required|string',
                'birthCertificate' => 'required|string',
                'birthOfDate' => 'required',
                'bikashNumber' => 'required',
                'transectionId' => 'required'

            ]);

            $student = Student::where('registrationNum', $registrationNum)->first();

            $student->firstName = $request->firstName;
            $student->lastName = $request->lastName;
            $student->fatherName = $request->fatherName;
            $student->motherName = $request->motherName;
            $student->email = $request->email;
            $student->mobile = $request->mobile;
            $student->nid = $request->nid;
            $student->birthCertificate = $request->birthCertificate;
            $student->birthOfDate = $request->birthOfDate;
            $student->bikas_number = $request->bikashNumber;
            $student->transectionId = $request->transectionId;

           
            if($request->hasFile('photo')){

                $request->photo->storeAs('public',time().'_image_'.$request->photo->getClientOriginalExtension());
                $image = time().'_image_'.$request->photo->getClientOriginalExtension();
                $student->photo = $image;

            }
            if($request->hasFile('signature')){
                
                $request->signature->storeAs('public', time().'_signature_'.$request->signature->getClientOriginalExtension());
                $signature = time().'_signature_'.$request->signature->getClientOriginalExtension();
                $student->signature = $signature;
            }

            $save = $student->save();                          
            if($save){

                return redirect()->route('admin.show.active.student')->with('success', 'Student information has been updated successfully');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Student $student, $registrationNum)
    {
        //retrive the student id
        $student = Student::where('registrationNum',$registrationNum)->first();
        //delete the student id 
        $delete = $student->delete();

        if($delete){
            return redirect()->route('admin.show.active.student')->with('danger', 'Student information has been updated successfully');;
        }
    }
}
