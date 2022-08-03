<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $categories = Category::take(6)->get();
        $products = Product::with(['galleries'])->paginate(32);

        return view('pages.home', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
