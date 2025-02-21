<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;

class PageController extends Controller
{
    public function home() {
        $featuredProducts = Product::where('is_featured', true)->take(8)->get();
        $blogs = Blog::latest()->take(3)->get();
        return view('pages.home', compact('featuredProducts', 'blogs'));
    }

    public function shop() {
        $products = Product::paginate(12);
        return view('pages.shop', compact('products'));
    }

    public function contact() {
        return view('pages.contact');
    }

    public function about() {
        return view('pages.about');
    }

    public function cart() {
        return view('pages.cart');
    }

    public function checkout() {
        return view('pages.checkout');
    }

    public function profile() {
        return view('pages.profile');
    }

    public function orderHistory() {
        return view('pages.order_history');
    }

    public function productDetail($id) {
        $product = Product::findOrFail($id);
        return view('pages.product_detail', compact('product'));
    }
}


