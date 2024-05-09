<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertise;
use App\Models\allfoods;

class TemplateController extends Controller
{
    public function index()
    {
        $data=advertise::all();                         //advertise part er data ekhan the blade e jacche
        $food=allfoods::all();            
                     

        return view('home.home',compact('data','food'));
    }
    public function login()
    {
        return view('loginsignup.loginsignup');
    }
    public function payment(){
        return view('others.payment');
    }
    public function cart(){
        return view('others.cart');
    }
    public function food_menu_all()
    {
        $food=allfoods::all();    
        return view("home.food-menu-all",compact('food'));
    }

  
}
