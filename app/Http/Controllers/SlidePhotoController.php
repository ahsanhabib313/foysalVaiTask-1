<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderPhoto;

class SlidePhotoController extends Controller
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
        return view('admin.addSlidePhoto');
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
            'title' => 'required',
            'photo' => 'required|image|mimes:jpg, jpeg,png'
        ]);

        // save data in database
        $sliderPhoto = new SliderPhoto;

        $sliderPhoto->title = $request->title;
        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('img/slider');
            $image->move($path, $imageName);
            $sliderPhoto->photo = $imageName;
        }

        $save = $sliderPhoto->save();
        if($save){
            return back()->with('success', 'Slider Photo has been created Successfully');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $sliderPhotos = SliderPhoto::all();
        return view('admin.showSlidePhoto', compact('sliderPhotos'));
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
        //retrieve the instance accordint to id
        $sliderPhoto = SliderPhoto::find($id);

        //delete the instance according to id
        $destroy = $sliderPhoto->delete();

        //check is it deleted
        if($destroy){
            return back()->with('success', 'Slider Photo has been deleted Successfully');
        }
    }
}
