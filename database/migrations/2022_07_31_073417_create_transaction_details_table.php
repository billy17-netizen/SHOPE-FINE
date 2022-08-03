<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->integer('transactions_id');
            $table->string('code');
            $table->integer('products_id');
            $table->integer('price');
            $table->string('resi');
            $table->string('shipping_status');  //pending/shipping/success
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
};
