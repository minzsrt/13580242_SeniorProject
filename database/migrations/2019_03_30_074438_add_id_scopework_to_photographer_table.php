<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdScopeworkToPhotographerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photographers', function (Blueprint $table) {
            $table->integer('id_scopework')->unsigned();
            $table->foreign('id_scopework', 'scope_photographer_foreign')
                ->references('id')
                ->on('scopeworks')
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
        Schema::table('photographers', function (Blueprint $table) {
            $table->dropForeign('scope_photographer_foreign');
            $table->dropColumn('id_scopework');
        });
    }
}
