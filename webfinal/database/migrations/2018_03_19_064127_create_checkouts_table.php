<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('transaction_date');
            $table->integer('account_id');
            $table->foreign('account_id')->references('id')->on('users');
            $table->integer('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('bank_id');
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->string('receipt_img', 300);
            $table->string('payment_status', 50);
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
