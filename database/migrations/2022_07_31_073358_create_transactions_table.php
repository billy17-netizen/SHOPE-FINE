<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('code');
            $table->integer('insurance_price');
            $table->integer('shipping_price');
            $table->integer('total_price');
            $table->string('transaction_status'); //Unpaid/Pending/Success/Failed
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
