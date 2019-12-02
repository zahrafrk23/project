<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Comment;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        $banner = Category::where('parent_id', 0)->latest()->paginate(6);
        $file = Product::latest()->paginate(3);
        $article = Article::latest()->paginate(3);
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $view_product = Product::orderBy('view', 'desc')->latest()->paginate(4);
        $special = Product::where('special', 1)->latest()->paginate(2);
        $all_category = Category::where('parent_id',0)->latest()->get();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('Home.index', compact('banner', 'file', 'article', 'products', 'view_product', 'special', 'all_category', 'categories', 'subcategories'));
    }

    public function about()
    {
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $all_category = Category::where('parent_id',0)->latest()->get();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('about.index', compact('products', 'all_category', 'categories', 'subcategories'));
    }
    public function rule()
    {
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $all_category = Category::where('parent_id',0)->latest()->get();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('rule.index', compact('products', 'all_category', 'categories', 'subcategories'));
    }
    public function comment(Request $request)
    {
        $this->validate(\request(), [
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255'],
            'comment' => 'required|min:5'
        ]);
        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'parent_id' => $request->parent_id,
            'commentable_type' => $request->commentable_type,
            'commentable_id' => $request->commentable_id,
        ]);
        alert()->success('نظر شما پس از تایید نمایش داده خواهد شد', 'نظر شما با موفقیت ثبت شد')->persistent('ok');
        return back();
    }

    public function faq()
    {
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $all_category = Category::where('parent_id',0)->latest()->get();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('faq.index', compact('products', 'all_category', 'categories', 'subcategories'));
    }

    public function category(Category $category)
    {
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $cat = $category->file()->latest()->paginate(15);
        $category = Category::all();
        $all_category = Category::where('parent_id',0)->latest()->get();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('Category.index', compact('cat', 'category', 'products', 'all_category', 'categories', 'subcategories'));
    }

    public function search()
    {

        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $keyWord = \request('search');
        $searchs = Product::search($keyWord)->latest()->get();
        $all_category = Category::where('parent_id',0)->latest()->get();
        $cats = Category::all();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('search.index', compact('products', 'cats','categories', 'subcategories', 'searchs', 'keyWord', 'all_category'));
    }
}
