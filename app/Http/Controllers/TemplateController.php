<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Advertise;
use App\Models\allfoods;
use App\Models\User;
use App\Models\Cart;

class TemplateController extends Controller
{
    public function index()
    {
        $data=advertise::all();                         //advertise part er data ekhan the blade e jacche
        $food=allfoods::all();            
        $user = User::all();           

        return view('home.home',compact('data','food','user'));
    }
    public function login()
    {
        return view('loginsignup.loginsignup');
    }
    public function payment(){
        return view('others.payment');
    }
    public function cart(){
        $data=allfoods::all();
        $user = Auth::user(); 
        $username = $user->name;

        return view('others.cart',compact('data','username'));
    }
    public function addcart(Request $request, $id)
    {
 
        if (auth()->check()) {
            // dd('somethinf');

            $user = Auth::user(); 
            $user_id = $user->id;
            $foodid = $id;

            $cart = new Cart();
            $cart->user_id = $user_id;
            $cart->food_id = $foodid;

            $cart->save();
            Session::flash('alert', 'success');
            // return redirect()->back()->with('success', 'Item added to cart!');
            return redirect()->route("after-user-login")->with('success', 'Item added to cart!');
        } else {
            return redirect()->route('login')->with('error', 'You need to login first!');
        }
    }
    // public function showcart(Request $request,$id)
    // {
    //     $data=cart::where('user_id',$id)->join('allfoods','carts.food_id','=','food.id')->get();
    // }
    public function showcart(Request $request, $id)
    {
        $cartItems = Cart::where('user_id', $id)
            ->join('allfoods', 'carts.food_id', '=', 'allfoods.id')
            ->select('allfoods.*', 'carts.id as cart_id')
            ->get();
        
        return view('cart', compact('cartItems'));
    }
    public function food_menu_all()
    {
        $food=allfoods::all();   
        $user = Auth::user(); 
        $username = $user->name;

        return view("home.food-menu-all",compact('food','username'));
    }


  
}
