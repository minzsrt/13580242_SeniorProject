<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdUserToVerifycardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('verify_cards', function (Blueprint $table) {

            $table->integer('id_user')->unsigned()->unique();
            $table->foreign('id_user', 'user_verifycard_foreign')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->integer('id_status')->unsigned();
            $table->foreign('id_status', 'statusverify_verifycard_foreign')
                ->references('id')
                ->on('statusverifies')
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
        Schema::table('verify_cards', function (Blueprint $table) {
            $table->dropForeign('statusverify_verifycard_foreign');
            $table->dropColumn('id_status');
            $table->dropForeign('user_verifycard_foreign');
            $table->dropColumn('id_user');
        });
    }
}
