<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function single(Product $product)
    {
        $product->increment('view');
       $special = Product::all()->where('special',1);
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $comments = $product->comments()->where('aproved', 1)->where('parent_id', 0)->latest()->with('comments')->get();
        $all_category = Category::where('parent_id',0)->latest()->get();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('product.single', compact('special','product', 'products', 'comments','all_category','categories','subcategories'));
    }

    public function product()
    {
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $product_all = Product::latest()->paginate(20);
        $category = Category::all();
        $files = Product::latest()->paginate(15);
        $all_category = Category::where('parent_id',0)->latest()->get();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('product.all', compact('products', 'product_all','category','files','all_category','categories','subcategories'));
    }
}
