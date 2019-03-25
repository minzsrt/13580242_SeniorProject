<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdUserAndIdOrderToReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user', 'user_review_foreign')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('id_photographer')->unsigned();
            $table->foreign('id_photographer', 'photographer_review_foreign')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('id_order')->unsigned()->unique();
            $table->foreign('id_order', 'order_review_foreign')
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
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('order_review_foreign');
            $table->dropColumn('id_order');
            $table->dropForeign('photographer_review_foreign');
            $table->dropColumn('id_photographer');
            $table->dropForeign('user_review_foreign');
            $table->dropColumn('id_user');
        });
    }
}
