<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.admin.user.index', [
            'users' => $users
        ]);
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        User::create($data);

        return redirect()->route('user.index')->with('success', 'User created successfully');
    }

    public function create()
    {
        return view('pages.admin.user.create');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $item = User::find($id);
        return view('pages.admin.user.edit', [
            'item' => $item
        ]);
    }

    public function update(UserRequest $request, $id)
    {
        $data = $request->all();
        if ($request->password || $request->email) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }
        User::findOrFail($id)->update($data);

        return redirect()->route('user.index')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('user.index')->with('success', 'User deleted successfully');
    }
}
