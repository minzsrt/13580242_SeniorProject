<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdFormattimesToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('id_formattime')->unsigned();
            $table->foreign('id_formattime', 'formattime_order_foreign')
                ->references('id')
                ->on('format_times')
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
        Schema::table('orders', function(Blueprint $table) {
            $table->dropForeign('formattime_order_foreign');
            $table->dropColumn('id_formattime');
        });
    }
}
