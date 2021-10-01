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
            return back()->with('success', 'Member Registration Activated succesfully with Registration number '.$member->registrationNum.' and personal Number is:'.$member->mobile);
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
         $officeLocation = OfficeLocation::first(); 

        return view('registeredMember', compact('address', 'officeLocation'));
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
         $officeLocation = OfficeLocation::first(); 

         if(empty($member)){
            $request->session()->now('error', 'There is no information with this Registrtion Number');
            return view('registeredMember', compact('address', 'officeLocation'));
                 
         }else{
            return view('registeredMember', compact('address', 'officeLocation', 'member'));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      // show the members those are pending

      public function showActiveMember(Request $request){

        $members = Member::where('status', 1)->get();

        return view('admin.showActiveMember', compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member, $registrationNum)
    {
        //retrieve the stident data
        $member = Member::where('registrationNum', $registrationNum)->first();

        return view('admin.editMember', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $registrationNum)
    {
            //validate the member filed
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
                'transectionId' => 'required',
                'registrationNum' => 'required'

            ]);

            $member = Member::where('registrationNum', $registrationNum)->first();

            $member->firstName = $request->firstName;
            $member->lastName = $request->lastName;
            $member->fatherName = $request->fatherName;
            $member->motherName = $request->motherName;
            $member->email = $request->email;
            $member->mobile = $request->mobile;
            $member->nid = $request->nid;
            $member->birthCertificate = $request->birthCertificate;
            $member->birthOfDate = $request->birthOfDate;
            $member->bikas_number = $request->bikashNumber;
            $member->transectionId = $request->transectionId;
            $member->registrationNum = $request->registrationNum;
            

            if($request->hasFile('photo')){

                $request->photo->storeAs('public',time().'_image_'.$request->photo->getClientOriginalExtension());
                $image = time().'_image_'.$request->photo->getClientOriginalExtension();
                $member->photo = $image;

            }
            if($request->hasFile('signature')){
                
                $request->signature->storeAs('public', time().'_signature_'.$request->signature->getClientOriginalExtension());
                $signature = time().'_signature_'.$request->signature->getClientOriginalExtension();
                $member->signature = $signature;
            }

            $save = $member->save();                          
            if($save){

                return redirect()->route('admin.show.active.member')->with('success', 'Member information has been updated successfully');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Member $member, $registrationNum)
    {
        //retrive the member id
        $member = Member::where('registrationNum',$registrationNum)->first();
        //delete the member id 
        $delete = $member->delete();

        if($delete){
            return redirect()->route('admin.show.active.member')->with('danger', 'Member information has been updated successfully');;
        }
    }
}
