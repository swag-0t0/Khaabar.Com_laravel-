<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        $total = $request->query('total');
        return view('others.payment', ['total' => $total]);
    }
}
