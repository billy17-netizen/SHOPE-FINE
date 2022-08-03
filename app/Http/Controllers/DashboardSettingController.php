<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Auth;
use Illuminate\Http\Request;

class DashboardSettingController extends Controller
{
    public function store()
    {
        $user = Auth::user();
        $categories = Category::all();
        return view('pages.dashboard-settings', [
            'user' => $user,
            'categories' => $categories
        ]);
    }

    public function account()
    {
        $user = Auth::user();
        return view('pages.dashboard-account', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, $redirect)
    {
        $data = $request->all();
        $item = Auth::user();

        $item->update($data);

        return redirect()->route($redirect);
    }
}
