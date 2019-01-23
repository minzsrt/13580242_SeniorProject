<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdAlbumToImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images_album', function (Blueprint $table) {
            $table->integer('id_album')->unsigned()->default(1);
            $table->foreign('id', 'album_image_foreign')
                ->references('id')
                ->on('albums')
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
        Schema::table('images_album', function (Blueprint $table) {
            //
        });
    }
}
