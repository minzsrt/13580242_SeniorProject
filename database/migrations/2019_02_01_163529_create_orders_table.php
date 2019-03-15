<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('price');
            $table->time('time_work');
            $table->date('date_work');
            $table->text('detail');
            $table->integer('transportation_cost')->nullable();
            $table->integer('shipping_cost')->nullable();
            $table->integer('total');
            $table->string('place_id');
            $table->string('place_name');
            $table->string('lat');
            $table->string('lng');
            $table->text('address');
            $table->text('url');
            $table->text('status_order');
            $table->text('status_payment');
            $table->timestamps();
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
}
