<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Address;
use App\Models\OfficeLocation;

class MemberController extends Controller
{


  

    // active the pending members

    public function active($id){

        $updated = Member::where('id', $id) 
                           ->update([
                               'status' => 1
                           ]);

       $member = Member::where('id', $id)->first();
        if($updated){
            return back()->with('success', 'Student Registration Activated succesfully with Registration number '.$member->registrationNum.'.');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchIndex()
    {

         //getting all address
         $address = Address::first();
         //getting office location
         $officeLocaiton = OfficeLocation::first(); 

        return view('registeredMember', compact('address', 'officeLocaiton'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //validate the request
        $request->validate([
            'registrationNum' => 'required'
        ]);

        // searching the member
        $member = Member::where('registrationNum',$request->registrationNum)
                        ->where('status', 1)
                        ->first();
                      
        //getting all address
         $address = Address::first();

         //getting office location
         $officeLocaiton = OfficeLocation::first(); 

         if(empty($member)){
            $request->session()->now('error', 'There is no information with this Registrtion Number');
            return view('registeredMember', compact('address', 'officeLocaiton'));
                 
         }else{
            return view('registeredMember', compact('address', 'officeLocaiton', 'member'));
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      // show the members that are Pending

      public function show(Request $request){

        $members = Member::where('status', 0)->get();

        return view('admin.showMember', compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
