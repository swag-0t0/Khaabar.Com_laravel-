<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\advertise;
use App\Models\allfoods;


//Vai ekhan theke admin er crud chole just nothing-else
class AdminController extends Controller
{
    public function adminhome(){
        $user = Auth::user(); 
        $username = $user->name;
        return view('admin.adminhome',compact('username'));
    }
    public function adminform(){
        $data=advertise::all();
        $user = Auth::user(); 
        $username = $user->name;
        return view('admin.form',compact('data','username'));
    }

    public function admintables(){

        $data=user::all();
        $food=allfoods::all();
        $user = Auth::user(); 
        $username = $user->name;
        return view('admin.tables',compact('data','food','username'));     //passing data,food to adminform to show
    }

    public function adminuserprofile(){
        $user = Auth::user(); 
        $username = $user->name;
        return view('admin.userprofile',compact('username'));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    //profile starts
    public function profileinfo(Request $request)
    {$user = Auth::user(); 
        $username = $user->name;

        return view('admin.profileinfo',compact('username'));
    }


    //profile ends

    //advertise starts
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
    public function deleteadvertise($id)
    {
        $data=advertise::find($id);
        $data->delete();

        return redirect()->back();

    }
    //advertise ends

    //allfoods starts
    
    public function allfoods(Request $request){

        $data= new allfoods;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('allfoods_image',$imagename);

        $data->image=$imagename;
        $data->food_type=$request->food_type;
        $data->food_name=$request->food_name;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->save();

        return redirect()->back();
    }
    public function allfoodsdelete($id)
    {
        $item=allfoods::find($id);
        $item->delete();
        return redirect()->back();

    }
    public function allfoodsupdateview($id)
    {
       
        
        $food=allfoods::all();
        $item=allfoods::find($id);
        $user = Auth::user(); 
        $username = $user->name;
       
        if(!$item)
        {
            $this->info('Not ok');
                
        }
        else{
             return view('update.allfoodsupdateview',compact('food','item','username'));

        }
       
    }
     
    public function allfoodsupdate(Request $request,$id){

        $data= allfoods::find($id);

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('allfoods_image',$imagename);

        $data->image=$imagename;
        $data->food_type=$request->food_type;
        $data->food_name=$request->food_name;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->save();

        return redirect()->route('admintables');
    }

       
    //allfoods ends

}
