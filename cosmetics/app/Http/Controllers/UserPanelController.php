<?php

namespace App\Http\Controllers;

use App\Category;
use App\Payment;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;

class UserPanelController extends Controller
{
    public function index()
    {
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $category = Category::all();
        $payments = Payment::all()->whereIn('user_id', auth()->user()->id);
        $all_category = Category::where('parent_id',0)->latest()->get();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('panel.index', compact('products', 'category', 'payments','all_category','categories','subcategories'));
    }
    public function update(Request $request,$id)
    {
        $user=User::whereId($id)->first();
        $user->update(['name'=>$request->name]);
        return back();

    }
}
