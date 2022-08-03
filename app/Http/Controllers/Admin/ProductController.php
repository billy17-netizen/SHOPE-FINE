<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['user', 'category'])->get();
        return view('pages.admin.product.index', [
            'products' => $products
        ]);
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        Product::create($data);

        return redirect()->route('product.index')->with('success', 'Product created successfully');
    }

    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('pages.admin.product.create', [
            'users' => $users,
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $item = Product::find($id);
        $users = User::all();
        $categories = Category::all();
        return view('pages.admin.product.edit', [
            'item' => $item,
            'users' => $users,
            'categories' => $categories
        ]);
    }

    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        Product::findOrFail($id)->update($data);

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $item = Product::findOrFail($id);
        $item->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }
}
