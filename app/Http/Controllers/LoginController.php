<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * 
     * 
     * show the login page 
     * 
     * 
     */
    public function index(){
        return view('admin.login');
    }

    /**
     * 
     * 
     * login
     * 
     * 
     */
    public function login(Request $request){

        //validate the requests
        $request->validate([
            'email'    => 'required|email|exists:users',
            'password' => 'required|max:8'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            if(Auth::user()->role == 1 || Auth::user()->role == 0 ){
                return redirect()->route('admin.dashboard');
            }
        }else{
            return back()->with('error', 'Your credentials is invalid');
        }
    }
}
