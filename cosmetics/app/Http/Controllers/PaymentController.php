<?php

namespace App\Http\Controllers\Admin;

use App\Adress;
use App\Payment;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::latest()->get();
        return view('admin.payment.index', compact('payments'));
    }
	    public function show()
    {
        $payment = Payment::all()->where('id', \request()->id)->first();
        $address = Adress::all()->where('id', $payment->address)->first();
        $products= Product::all()->whereIn('id' , explode('-',$payment->products));
        return view('admin.payment.show', compact('payment', 'address','products'));
    }

}
