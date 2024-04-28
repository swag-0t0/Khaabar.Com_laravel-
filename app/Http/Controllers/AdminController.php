<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\advertise;

class AdminController extends Controller
{
    public function adminhome(){
        return view('admin.adminhome');
    }
    public function adminform(){
        return view('admin.form');
    }
    public function admintables(){

        $data=user::all();
        return view('admin.tables',compact('data'));
    }
    public function adminuserprofile(){
        return view('admin.userprofile');
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function advertise_form(Request $request){

        $data= new advertise;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('advertise_image',$imagename);

        $data->image=$imagename;
        $data->text1=$request->text1;
        $data->text2=$request->text2;
        $data->description=$request->description;
        $data->save();

        return redirect()->back();
    }    
    
  
}
