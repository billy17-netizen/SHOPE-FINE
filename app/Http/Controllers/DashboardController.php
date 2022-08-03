<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $transaction = TransactionDetail::with(['transaction.user', 'product.galleries'])->whereHas('product', function ($product) {
            $product->where('users_id', Auth::user()->id);
        });

        $revenue = $transaction->get()->reduce(function ($carry, $item) {
            return $carry + $item->price;
        });

        $customer = User::count();
        return view('pages.dashboard', [
            'revenue' => $revenue,
            'customer' => $customer,
            'transaction_count' => $transaction->count(),
            'transactions' => $transaction->get(),
        ]);
    }
}
