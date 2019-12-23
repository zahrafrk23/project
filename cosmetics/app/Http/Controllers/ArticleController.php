<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Comment;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ArticleController extends Controller
{
    public function index()
    {
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $articles = Article::latest()->paginate(10);
        $all_category = Category::where('parent_id',0)->latest()->get();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('article.index',compact('products','articles','all_category','categories','subcategories'));
    }

    public function single(Article $article)
    {
        $comments = $article->comments()->where('aproved', 1)->where('parent_id', 0)->latest()->with('comments')->get();
        $article->increment('viewCount');
        $products = Session::get('cart-products', []);
        $ids = array_keys($products);
        $products = Product::whereIn('id', $ids)->get();
        $all_category = Category::where('parent_id',0)->latest()->get();
        $categories = Category::all()->where('parent_id', 0);
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        return view('article.single', compact('article', 'comments','products','all_category','categories','subcategories'));
    }
}
