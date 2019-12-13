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

}
