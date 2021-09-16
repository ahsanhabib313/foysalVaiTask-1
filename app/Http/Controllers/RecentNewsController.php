<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecentNews;

class RecentNewsController extends Controller
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
        return view('admin.addRecentNews');
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
            'type' => 'required',
            'file' => 'required|mimes:pdf,docx'
        ]);

        // save data in database
        $recentNews = new RecentNews;

        $recentNews->title = $request->title;
        $recentNews->type = $request->type;

        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $path = public_path('recentNews');
            $file->move($path, $fileName);
            $recentNews->file = $fileName;
        }

        $save = $recentNews->save();
        if($save){
            return back()->with('success', 'Recent News has been created Successfully');
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
        $recentNews = RecentNews::all();
        return view('admin.ShowRecentNews', compact('recentNews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //retrieve the instance according to id
        $recentNews = RecentNews::find($id);
        return view('admin.editRecentNews', compact('recentNews'));
        
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
            'title' => 'required',
            'type' => 'required',
           
        ]);

        // save data in database
        $recentNews = RecentNews::find($id);

        $recentNews->title = $request->title;
        $recentNews->type = $request->type;

        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $path = public_path('recentNews');
            $file->move($path, $fileName);
            $recentNews->file = $fileName;
        }

        $save = $recentNews->save();
        if($save){
            return redirect()->route('admin.show.recent.news')->with('success', 'Recent News has been updated Successfully');
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
        //retrieve the instance according to id
        $recentNews = RecentNews::find($id);

        //delete the instance
        $delete= $recentNews->delete();

        if($delete){
            return back()->with('success', 'Recent News has been deleted successfully');
        }
    }
}
