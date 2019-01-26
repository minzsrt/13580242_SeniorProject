<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdUserToPhotographersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photographers', function (Blueprint $table) { 
            $table->integer('id_user')->unsigned()->unique(); 
            $table->foreign('id_user', 'id_users_photographers_foreign')
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
        Schema::table('photographers', function(Blueprint $table) {
            $table->dropForeign('id_users_photographers_foreign');
            $table->dropColumn('id_user');
        });
    }
}
