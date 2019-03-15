<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdUserToDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deposit_accounts', function (Blueprint $table) {
            $table->integer('id_photographer')->unsigned()->unique(); 
            $table->foreign('id_photographer', 'id_users_deposits_foreign')
            ->references('id')
            ->on('users')
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
        Schema::table('deposit_accounts', function (Blueprint $table) {
            $table->dropForeign('id_users_deposits_foreign');
            $table->dropColumn('id_photographer');
        });
    }
}
