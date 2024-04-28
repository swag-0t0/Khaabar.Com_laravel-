<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Advertise;

use Hash;
use Session;

class LoginController extends Controller
{
    public function login(){
        return view('loginsignup.loginsignup');
    }
    public function registeruser(Request $request)
    {
           $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'phone'=>'max:11',
            'password'=>'required|max:32|min:4'
           ]);
           $user = new user();
           $user->name=$request->name;
           $user->email=$request->email;
           $user->phone=$request->phone;
           $user->password=Hash::make($request->password);

           $res = $user->save();
           
           if($res){
            echo 'done';
            return back()->with('success', 'You have registered successfully!');
           }
           else{
            return back()->with('fail','Something went wrong!');
           }
    }

    public function loginuser(Request $request)
    {
        $data=advertise::all();

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4|max:32'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        echo $user->role;
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginid', $user->id);
                if ($user->role === "0") {
                    return view('home.after-user-login',compact('data'));
                } else {
                    return view('home.after-admin-login',compact('data'));
                }
            }
        }
        return back()->with('fail', 'Invalid email or password');
       
    }
    
    public function after_user_login(){
        return view('home.after-user-login');
    }
}
