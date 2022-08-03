<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Admin\CategoryRequest;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.admin.category.index', [
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $item = Category::find($id);
        return view('pages.admin.category.edit', [
            'item' => $item
        ]);
    }

    public function update(CategoryRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/category', 'public');
        Category::findOrFail($id)->update($data);

        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/category', 'public');
        Category::create($data);

        return redirect()->route('category.index')->with('success', 'Category created successfully');
    }

    public function create()
    {
        return view('pages.admin.category.create');
    }

    public function destroy($id)
    {
        $item = Category::findOrFail($id);
        $item->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }
}
