<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdOrderToSendworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sendworks', function (Blueprint $table) {
            $table->integer('id_order')->unsigned();
            $table->foreign('id_order', 'order_file_foreign')
                ->references('id')
                ->on('orders')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sendworks', function (Blueprint $table) {
            $table->dropForeign('order_file_foreign');
            $table->dropColumn('id_order');
        });
    }
}
