<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\District;
use App\Models\Upozilla;
use App\Models\Notice;
use App\Models\Employee;
use App\Models\CurriCulum;
use App\Models\RecentNews;
use App\Models\SliderPhoto;
use App\Models\Address;
use App\Models\OfficeLocation;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //get all notices
        $notices = Notice::all();
        
        //get all employees
        $employees = Employee::all();

        //getting all curriculums
        $curriculums = CurriCulum::all();

        //getting all recent news
        $recentNews = RecentNews::all();

        //getting all address
        $addresses = Address::all();

        //getting all slide photos
        $slidePhotos = SliderPhoto::all(); 

        //getting office location
        $officeLocaiton = OfficeLocation::first(); 
       
        return view('home', compact('notices', 'employees', 'curriculums','recentNews','slidePhotos', 'addresses', 'officeLocaiton'));
    }

    /** Register ******/

    public function register(Request $request){
        return view('register-form');
    }

    /**
     * Show the form for creating a new studnet.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAdmissionForm()
    {

        return view('admission');

    }

    /**
     * Show the form for creating a new member.
     *
     * @return \Illuminate\Http\Response
     */
    public function showMemberForm(){
       
        return view('member'); 
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
