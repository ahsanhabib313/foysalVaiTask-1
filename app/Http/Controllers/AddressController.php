<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
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
        return view('admin.addAddress');
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
            'address' => 'required',
            'telephone' => 'required',
            'fax' => 'required',
            'email' => 'required',
            
        ]);

        // save data in database
        $address = new Address;

        $address->address = $request->address;
        $address->telephone = $request->telephone;
        $address->fax = $request->fax;
        $address->email = $request->email;

        $save = $address->save();
        if($save){
            return back()->with('success', 'Address has been created Successfully');
        }

         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //get all address
        $addresses = Address::all();
        return view('admin.showAddress', compact('addresses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address, $id)
    {
       //get the address according to id
       $address = Address::find($id);

       return view('admin.editAddress', compact('address'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address, $id)
    {
        //validate the request 
        $request->validate([
            'address' => 'required',
            'telephone' => 'required',
            'fax' => 'required',
            'email' => 'required',
            
        ]);

        // save data in database
        $address = Address::find($id);

        $address->address = $request->address;
        $address->telephone = $request->telephone;
        $address->fax = $request->fax;
        $address->email = $request->email;

        $save = $address->save();
        if($save){
            return redirect()->route('admin.show.address')->with('success', 'Address has been updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address, $id)
    {
        //get the instace oh address row
        $address = Address::find($id);

        //delete the instance
        $delete = $address->delete();
        if($delete){
            return back()->with('success', 'Address has been deleted Successfully');
        }
    }
}
