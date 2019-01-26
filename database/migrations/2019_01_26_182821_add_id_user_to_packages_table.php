<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdUserToPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_cards', function (Blueprint $table) { 
            $table->integer('id_user')->unsigned()->default(1); 
            $table->foreign('id_user', 'id_users_packages_foreign')
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
        Schema::table('package_cards', function(Blueprint $table) {
            $table->dropForeign('id_users_packages_foreign');
            $table->dropColumn('id_user');
        });
    }
}
