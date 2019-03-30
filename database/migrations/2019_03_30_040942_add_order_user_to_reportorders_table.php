<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrderUserToReportordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reportorders', function (Blueprint $table) {
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user', 'user_reportorders_foreign')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('id_order')->unsigned();
            $table->foreign('id_order', 'order_reportorders_foreign')
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
        Schema::table('reportorders', function (Blueprint $table) {
            $table->dropForeign('order_reportorders_foreign');
            $table->dropColumn('id_order');
            $table->dropForeign('user_reportorders_foreign');
            $table->dropColumn('id_user');
        });
    }
}
