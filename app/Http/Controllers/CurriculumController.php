<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\CurriCulum;

class CurriculumController extends Controller
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
        return view('admin.addCurriculum');
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
            'title' => 'required',
            'file' => 'required|mimes:pdf, docx'
        ]);

        // save data in database
        $curriculum = new CurriCulum;

        $curriculum->title = $request->title;

        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName =  time().'.'.$file->getClientOriginalExtension();
            $path = public_path('curriculums');
            $file->move($path, $fileName);
            $curriculum->file = $fileName;
        }

        $save = $curriculum->save();
        if($save){
            return back()->with('success', 'Curriculum has been created Successfully');
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
        //retrieve all curriculums
        $curriculums = CurriCulum::all();
        return view('admin.showCurriculum', compact('curriculums'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //retirve the curriculum
        $curriculum = CurriCulum::find($id);

        return view('admin.editCurriculum', compact('curriculum'));
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

       // dd($request->all());
         //validate the request 
         $request->validate([
            'title' => 'required',
        ]);

        // save data in database
        $curriculum = CurriCulum::find($id);

        $curriculum->title = $request->title;

        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName =time().'.'.$file->getClientOriginalExtension();
            $path = public_path('curriculums');
            $file->move($path, $fileName);
            $curriculum->file = $fileName;
        }

        $save = $curriculum->save();
        if($save){
            return redirect()->route('admin.show.curriculum')->with('success', 'Curriculum has been updated Successfully');
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
        //get the curriculum 
        $curriculum = CurriCulum::find($id);

        //delete the curriculum
        $delete = $curriculum->delete();

        if($delete){
            return back()->with('success', 'Curriculum has been deleted Successfully');
        }
    }

    
}
