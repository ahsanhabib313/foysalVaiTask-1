<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * 
     * show the registration page 
     * 
     * 
     */

     public function index(){
         
        return view('admin.register');
     }

     /**
     * 
     * user registration 
     * 
     * 
     */


     public function register(Request $request){
           
        //validate the requests
        $request->validate([
            'username' => 'required|max:12|unique:users',
            'email'    => 'required|email|unique:users',
            'password' => 'required|max:8'
        ]);


        $user = new User;

        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = 0;
        $user->password = Hash::make($request->password) ;

        $save = $user->save();

        if($save){
            return redirect('admin/login')->with('success', 'Your registration has been successfully completed. please log in...');
        }

     }
}
