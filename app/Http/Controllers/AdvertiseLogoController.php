<?php

namespace App\Http\Controllers;

use App\Models\AdvertiseLogo;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class AdvertiseLogoController extends Controller
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

        return view('admin.addAdvertisingLogo');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //validate all request 

        $request->validate([
            'title' => 'required',
            'logo' => 'required|mimes:jpg,pnj,web,jpeg'
        ]);

        if($request->hasFile('logo')){
            $image = $request->logo;
            $logoName = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('img/advertisingLogo');
            $image->move($path, $logoName);
        }

        $insert = AdvertiseLogo::create([

            'title' => $request->title,
            'logo' => $logoName
        ]);

        if($insert){
            return back()->with('success', 'Advertising Logo has been added successfully...');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdvertiseLogo  $advertiseLogo
     * @return \Illuminate\Http\Response
     */
    public function show(AdvertiseLogo $advertiseLogo)
    {
        //get  advertising logo
        $advertisingLogos = AdvertiseLogo::all();

        return view('admin.showAdvertisingLogo', compact('advertisingLogos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvertiseLogo  $advertiseLogo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //get the advertising logo 
        $advertisingLogo = AdvertiseLogo::find($id);

        return view('admin.editAdvertisingLogo', compact('advertisingLogo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvertiseLogo  $advertiseLogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvertiseLogo $advertiseLogo, $id)
    {

         //validate all request 
         $request->validate([
            'title' => 'required',
            'logo' => 'required|mimes:jpg,pnj,web,jpeg'
        ]);

        if($request->hasFile('logo')){
            $image = $request->logo;
            $logoName = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('img/advertisingLogo');
            $image->move($path, $logoName);
        }

        $update = AdvertiseLogo::where('id', $id)
                                ->update([
                                    'title' => $request->title,
                                    'logo' => $logoName
                                ]);

        if($update){


            $request->session()->flash('success', 'Advertising Logo has been updated successfully...');
            return redirect()->route('admin.show.advertising.logo');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvertiseLogo  $advertiseLogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, AdvertiseLogo $advertiseLogo, $id)
    {
    
        //get the advertise logo
        $advertisingLogo = AdvertiseLogo::find($id);

        $delete = $advertisingLogo->delete();

        if($delete){

            $request->session()->flash('success', 'Advertising Logo has been deleted successfully...');
            return redirect()->route('admin.show.advertising.logo');
        }
    }
}
