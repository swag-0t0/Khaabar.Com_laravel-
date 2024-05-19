<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Advertise;
use App\Models\allfoods;

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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:32'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $data = Advertise::all();
            $food = allfoods::all();
            $username = $user->name;
            $userid=$user->id;
            if ($user->role === "0") {
                return view('home.after-user-login', compact('data', 'food', 'username','userid'));
            } else {
                return view('home.after-admin-login', compact('data', 'food', 'username','userid'));
            }
        }

        return back()->with('fail', 'Invalid email or password');
    }

    
    public function after_user_login(){
        
            $user = Auth::user();
            $data = Advertise::all();
            $food = allfoods::all();
            $username = $user->name;
            return view('home.after-user-login', compact('data', 'food', 'username'));
        
        
    }
}
