<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        return view('home.home');
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
