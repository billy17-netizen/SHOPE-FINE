<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'users_id',
        'total_price',
        'insurance_price',
        'code',
        'transaction_status',
        'shipping_price'
    ];

    protected $hidden = [

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
