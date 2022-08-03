<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductGalleryRequest;
use App\Models\Product;
use App\Models\ProductGallery;

class ProductGalleryController extends Controller
{
    public function index()
    {
        $products = ProductGallery::with(['product'])->get();
        return view('pages.admin.Product Gallery.index', [
            'products' => $products
        ]);
    }

    public function store(ProductGalleryRequest $request)
    {
        $data = $request->all();
        $data['photos'] = $request->file('photos')->store('assets/product-gallery', 'public');

        ProductGallery::create($data);

        return redirect()->route('product-gallery.index')->with('success', 'Product Gallery created successfully');
    }

    public function create()
    {
        $products = Product::all();
        return view('pages.admin.Product Gallery.create', [
            'products' => $products,
        ]);
    }

    public function destroy($id)
    {
        $item = ProductGallery::findOrFail($id);
        $item->delete();

        return redirect()->route('product-gallery.index')->with('success', 'Product Gallery deleted successfully');
    }
}
