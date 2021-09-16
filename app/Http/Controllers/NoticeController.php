<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
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
        return view('admin.addNotice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation input field
        $request->validate([
            'notice' => 'required'
        ]);

        //creating notice instance
        $notice = new Notice;
        $notice->notice = $request->notice;

        $save = $notice->save();

        if($save){
            return back()->with('success', 'Notice has been created Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //get all notices 
        $notices = Notice::all();
        return view('admin.showNotice', compact('notices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice, $id)
    {
        //get the particular notice
        $notice = Notice::find($id);
        return view('admin.editNotice', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice, $id)
    {
         //validation input field
         $request->validate([
            'notice' => 'required'
        ]);

        //creating notice instance
        $notice =  Notice::find($id);
        $notice->notice = $request->notice;

        $save = $notice->save();

        if($save){
            return redirect()->route('admin.show.notice')->with('success', 'Notice has been updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice, $id)
    {
        //get the notice 
        $notice = Notice::find($id);

        //delete the notice
        $delete = $notice->delete();
        if($delete){
            return back()->with('success', 'Notice has been deleted Successfully');
        }
    }
}
