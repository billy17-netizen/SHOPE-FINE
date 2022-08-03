<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['user'])->get();
        return view('pages.admin.transaction.index', [
            'transactions' => $transactions
        ]);
    }


    public function edit($id)
    {
        $item = Transaction::find($id);
        return view('pages.admin.transaction.edit', [
            'item' => $item,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        Transaction::findOrFail($id)->update($data);

        return redirect()->route('transaction.index')->with('success', 'Transaction updated successfully');
    }

    public function destroy($id)
    {
        $item = Transaction::findOrFail($id);
        $item->delete();

        return redirect()->route('transaction.index')->with('success', 'Transaction deleted successfully');
    }
}
