<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['galleries', 'category'])->where('users_id', Auth::user()->id)->get();

        return view('pages.dashboard-product', [
            'products' => $products
        ]);
    }

    public function detail(Request $request, $id)
    {
        $product = Product::with(['galleries', 'user', 'category'])->findOrFail($id);
        $categories = Category::all();
        return view('pages.dashboard-product-details', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function uploadGallery(Request $request)
    {
        $data = $request->all();
        $data['photos'] = $request->file('photos')->store('assets/product-gallery', 'public');

        ProductGallery::create($data);

        return redirect()->route('dashboard.products.detail', $request->products_id)->with('success', 'Product Gallery created successfully');
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        $product = Product::create($data);

        $gallery = [
            'photos' => $request->file('photo')->store('assets/product', 'public'),
            'products_id' => $product->id,
        ];
        ProductGallery::create($gallery);

        return redirect()->route('dashboard.products')->with('success', 'Product created successfully');
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.dashboard-product-create', [
            'categories' => $categories
        ]);
    }

    public function deleteGallery(Request $request, $id)
    {
        $item = ProductGallery::findOrFail($id);
        $item->delete();

        return redirect()->route('dashboard.products.detail', $item->products_id)->with('success', 'Product Gallery deleted successfully');
    }

    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        Product::findOrFail($id)->update($data);

        return redirect()->route('dashboard.products')->with('success', 'Product updated successfully');
    }
}
