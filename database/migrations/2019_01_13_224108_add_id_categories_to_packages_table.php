<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdCategoriesToPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {           
        Schema::table('package_cards', function (Blueprint $table) {
            $table->integer('id_category')->unsigned();
            $table->foreign('id', 'category_package_foreign')
                ->references('id')
                ->on('categories')
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
        Schema::table('package_cards', function (Blueprint $table) {
            //
        });
    }
}
