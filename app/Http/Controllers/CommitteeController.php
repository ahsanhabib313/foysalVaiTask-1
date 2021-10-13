<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all committee
        $committees = Committee::all();

        return view('admin.showCommittee', compact('committees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addCommittee');
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
        $request->validate(([

                'name' => 'required'
        ]));

        $store = Committee::create([
            'name' => $request->name,
        ]);

        if($store){
            return back()->with('success', 'Committee has been created successfully...');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function show(Committee $committee, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        //get the committee
        $committee = Committee::findOrFail($id);

        return view('admin.editCommittee', compact('committee'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //validate the request
         $request->validate(([
            'name' => 'required'
        ]));

    $store = Committee::where('id', $id)
                        ->update([
                            'name' => $request->name,
                        ]);

    if($store){
        $request->session()->flash('success', 'Committee has been created successfully...');
        return redirect()->route('committee.index');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Committee  $committee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //get the committee
        $committee = Committee::findOrFail($id);

        $delete = $committee->delete();

        if($delete){
            $request->session()->flash('success', 'Committee has been deleted successfully...');
            return redirect()->route('committee.index');
          }

    }
}
