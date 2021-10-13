<?php

namespace App\Http\Controllers;


use App\Models\CommitteeMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Division;
use App\Models\District;
use App\Models\Upozilla;
use App\Models\Notice;
use App\Models\Employee;
use App\Models\CurriCulum;
use App\Models\RecentNews;
use App\Models\SliderPhoto;
use App\Models\Address;
use App\Models\AdvertiseLogo;
use App\Models\Committee;
use App\Models\OfficeLocation;

class CommitteeMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all commmittee members
        $committeeMembers = CommitteeMember::orderBy('committee_id', 'asc')->get();

        return view('admin.showCommitteeMember', compact('committeeMembers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get all committee

        $committees = Committee::all();

        return view('admin.addCommitteeMember', compact('committees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate request 
        $request->validate([

            'name'           => 'required',
            'designation'    => 'required',
            'committee_id'   => 'required',
            'photo'          => 'required'

        ]);

        if($request->hasFile('photo')){

            $image      = $request->photo;
            $photoName  = time().'.'.$image->getClientOriginalExtension();
            $path       = public_path('img/committeeMember');
            $image->move($path, $photoName);
        }
        $store = CommitteeMember::create([

            'name'           => $request->name,
            'designation'    => $request->designation,
            'committee_id'      => $request->committee_id,
            'photo'          => $photoName
        ]);

        if($store){

            return back()->with('success', 'Committee Member has been created successfully...');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommitteeMember  $committeeMember
     * @return \Illuminate\Http\Response
     */
    public function showCommitteeMember($committee_id)
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
         $address = Address::first();
 
         //getting all slide photos
         $slidePhotos = SliderPhoto::all(); 
 
         //getting office location
         $officeLocation = OfficeLocation::first(); 
 
         //get the advertising logo
         $advertisingLogo = AdvertiseLogo::first();
         //get all committee
 
         $committees = Committee::all();

        //get the committe member for specific committee

        $committeeMembers = CommitteeMember::where('committee_id',$committee_id)->orderBy('id','asc')->get();

        return view('showCommitteeMember', compact('committeeMembers','notices', 'employees', 'curriculums','recentNews','slidePhotos', 'address', 'officeLocation','advertisingLogo', 'committees'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommitteeMember  $committeeMember
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //get all committee
        $committees = Committee::all();

        //get the committee member
        $committeeMember = CommitteeMember::findOrFail($id);

        return view('admin.editCommitteeMember', compact('committeeMember', 'committees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CommitteeMember  $committeeMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate request 
        $request->validate([

            'name'           => 'required',
            'designation'    => 'required',
            'committee_id'   => 'required',
            'photo'          => 'required'

        ]);

        if($request->hasFile('photo')){

            $image      = $request->photo;
            $photoName  = time().'.'.$image->getClientOriginalExtension();
            $path       = public_path('img/committeeMember');
            $image->move($path, $photoName);
        }
        $update = CommitteeMember::where('id', $id)
                                ->update([

                                        'name'           => $request->name,
                                        'designation'    => $request->designation,
                                        'committee_id'      => $request->committee_id,
                                        'photo'          => $photoName
                                    ]);

        if($update){

            $request->session()->flash('success', 'Committee Member has been updated successfully...');

            return redirect()->route('committeeMember.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommitteeMember  $committeeMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //get the committee
        $committeeMember = CommitteeMember::findOrFail($id);

        $delete = $committeeMember->delete();

        if($delete){
            $request->session()->flash('success', 'Committee has been deleted successfully...');
            return redirect()->route('committee.index');
          }
    }
}
