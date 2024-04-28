<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertise;

class TemplateController extends Controller
{
    public function index()
    {
        $data=advertise::all();
        return view('home.home',compact('data'));
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
}
