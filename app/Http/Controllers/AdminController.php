<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\advertise;
use App\Models\allfoods;

//Vai ekhan theke admin er crud chole just nothing-else
class AdminController extends Controller
{
    public function adminhome(){
        return view('admin.adminhome');
    }
    public function adminform(){
        $data=advertise::all();
        return view('admin.form',compact('data'));
    }

    public function admintables(){

        $data=user::all();
        $food=allfoods::all();
        return view('admin.tables',compact('data','food'));     //passing data,food to adminform to show
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
       
        if(!$item)
        {
            $this->info('Not ok');
                
        }
        else{
             return view('update.allfoodsupdateview',compact('food','item'));

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
