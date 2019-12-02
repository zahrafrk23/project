<?php

namespace App\Http\Controllers;

use App\Adress;
use App\Http\Requests\PaymentRequest;
use App\Payment;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{

    public function index(PaymentRequest $request)
    {
        $user_id = auth()->user()->id;
        $address = $request->select;
        $address = Adress::where('id', $address)->first();
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $mahsool = $request->products;
        $price = 0;
        foreach ($products as $product) {
            $price += $product->price;
        }
        Payment::create([
            'user_id' => $user_id,
            'status' => false,
            'products' => $mahsool,
            'price' => $price,
            'resnumber' => '000000',
            'address' => $address->id,
        ]);

        alert()->success('پرداخت با موفقیت انجام شد','تبریک')->persistent('مرسی');
        return redirect()->back();
    }


}
