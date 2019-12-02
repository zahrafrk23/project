<?php

namespace App\Http\Controllers;

use App\Adress;
use App\Http\Requests\AddressRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Category;
class CartController extends Controller
{
    public function index()
    {
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $all_category = Category::where('parent_id',0)->latest()->get();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('Cart.index', compact('products', 'ids','all_category','categories','subcategories'));
    }

    public function addCart($productId)
    {
        $products = Session::get('cart-products', []);
        $products[$productId] = $productId;
        Session::put('cart-products', $products);
        alert()->success('محصول به سبد شما اضافه شد')->persistent('ok');
        return redirect()->back();
    }

    public function DeleteCart($productId)
    {
        $product = Session::get('cart-products');
        unset($product[$productId]);
        Session::put('cart-products', $product);
        return redirect('/cart');
    }
    public function address($user_id)
    {
        $file = Product::latest()->paginate(15);
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $address = Adress::all()->where('user_id', $user_id);
        $all_category = Category::where('parent_id',0)->latest()->get();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('Cart.addaddress', compact( 'file', 'products', 'address','ids','all_category','categories','subcategories'));
    }
    public function add_address(AddressRequest $request)
    {
        $user_id = $request->user_id;
        $name = $request->name;
        $phone = $request->phone;
        $ostan = $request->state;
        $city = $request->city;
        $address = $request->address;
        $codePosty = $request->code;
        Adress::create([
            'user_id' => $user_id,
            'name' => $name,
            'phone' => $phone,
            'ostan' => $ostan,
            'city' => $city,
            'address' => $address,
            'codeposty' => $codePosty,
        ]);
        alert()->success('عملیات با موفقیت انجام شد', 'آدرس جدید افزوده شد')->persistent('ok');
        return back();

    }
}
