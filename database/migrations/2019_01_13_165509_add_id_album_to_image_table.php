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
        Schema::table('image_albums', function (Blueprint $table) {
            $table->integer('album_id')->unsigned();
            $table->foreign('album_id', 'album_image_foreign')
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
        Schema::table('image_albums', function(Blueprint $table) {
            $table->dropForeign('album_image_foreign');
            $table->dropColumn('album_id');
        });
    }
}
