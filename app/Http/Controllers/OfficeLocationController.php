<?php

namespace App\Http\Controllers;

use App\Models\OfficeLocation;
use Illuminate\Http\Request;

class OfficeLocationController extends Controller
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
        return view('admin.addOfficeLocation');
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
            'office_location' => 'required'
        ]);

        $create = OfficeLocation::create([
            'office_location' => $request->office_location
        ]);

        if($create){
            return back()->with('success', 'Offcce Location has been added Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OfficeLocation  $officeLocation
     * @return \Illuminate\Http\Response
     */
    public function show(OfficeLocation $officeLocation)
    {
        //getting office locations
        $officeLocations = OfficeLocation::all();

        return view('admin.showOfficeLocation', compact('officeLocations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfficeLocation  $officeLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(OfficeLocation $officeLocation, $id)
    {
        //getting the location
        $officeLocation = OfficeLocation::findOrFail($id);

        return view('admin.editOfficeLocation', compact('officeLocation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfficeLocation  $officeLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfficeLocation $officeLocation, $id)
    {
        //validate the request 
        $request->validate([
            'office_location' => 'required'
        ]);
        
        $update = OfficeLocation::where('id', $id)
                                ->update([
                                    'office_location' => $request->office_location
                                ]);
        if($update){

            return redirect()->route('admin.show.office.location')->with('success', 'Office Location has been updated Successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfficeLocation  $officeLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfficeLocation $officeLocation, $id)
    {
        //retrive the office location
        $officeLocation = OfficeLocation::findOrFail($id);

        //delete office location
        $delete = $officeLocation->delete();

        if($delete){

            return redirect()->route('admin.show.office.location')->with('danger', 'Office Location has been deleted Successfully');
        }
    }
}
