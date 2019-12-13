<?php

namespace App\Http\Controllers\Admin;

use App\Payment;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::latest()->paginate(8);
        $products = Product::latest()->paginate(8);
        $orders = Payment::latest()->paginate(10);
        return view('admin.Layout.index',compact('user','products','orders'));
    }
}
