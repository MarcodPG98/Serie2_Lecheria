<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('client_id')->on('clients');
            $table->tinyinteger('status_id')->default(1); // valor por defecto 1
            $table->datetime('created_at')->useCurrent(); // valor por defecto
            $table->datetime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
