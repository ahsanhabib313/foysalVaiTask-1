<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\District;
use Illuminate\Http\Request;

class BranchController extends Controller
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
        //get the districts
        $districts = District::all();

        return view('admin.addBranch', compact('districts'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the requests
        $request->validate([
            'name' => 'required',
            'district_id' => 'required'
        ]);

        $store = Branch::create([
            'name' => $request->name,
            'district_id' => $request->district_id
        ]);

        if($store){
            return back()->with('success', 'Branch has been created Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //get all branches 
        $branches = Branch::all();

        return view('admin.showBranch', compact('branches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch, $id)
    {
        //get all districts 
        $districts = District::all();
        $branch = Branch::findOrFail($id);

        return view('admin.editBranch', compact('districts', 'branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch, $id)
    {
         //validate the requests
         $request->validate([
            'name' => 'required',
            'district_id' => 'required'
        ]);

        $update = Branch::where('id', $id)
                ->update([
                    'name' => $request->name,
                    'district_id' => $request->district_id
                ]);
        if($update){

            $request->session()->flash('success', 'Branch has been updated successfully...');
            return redirect()->route('admin.show.branch');
        }
               
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch, $id, Request $request)
    {
        //get the advertise logo
        $branch = Branch::findOrFail($id);

        $delete = $branch->delete();

        if($delete){

            $request->session()->flash('success', 'Branch has been deleted successfully...');
            return redirect()->route('admin.show.branch');
        }
    }
}
