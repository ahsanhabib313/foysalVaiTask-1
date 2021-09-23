<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
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
        return view('admin.addCourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validate the request 
         $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        // save data in database
        $course = new Course;

        $course->name = $request->name;
        $course->description = $request->description;

        $save = $course->save();
        if($save){
            return back()->with('msgType', 'success')->with('clsType', 'success')
            ->with('message', 'Course has been added Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $courses = Course::all();

        return view('admin.showCourse', compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get the course
        $course = Course::findOrFail($id);

        return view('admin.editCourse', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate the request
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        //update the course
        $update = Course::where('id', $id)
                         ->update([
                                'name' => $request->name,
                                'description' => $request->description
                             ]);

        if($update){
            
            return redirect()->route('admin.show.course')->with('msgType', 'success')->with('clsType', 'success')
            ->with('message', 'Course has been updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //get the course
        $course = Course::findOrFail($id);
        
        //delete the course
        $delete = $course->delete();

        if($delete){
            return redirect()->route('admin.show.course')->with('msgType', 'error')->with('clsType', 'danger')
            ->with('message', 'Course has been deleted Successfully');
        }
    }
}
