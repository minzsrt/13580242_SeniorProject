<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdFormattimesToPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_cards', function (Blueprint $table) {
            $table->integer('id_formattime')->unsigned();
            $table->foreign('id_formattime', 'formattime_package_foreign')
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
        Schema::table('package_cards', function(Blueprint $table) {
            $table->dropForeign('formattime_package_foreign');
            $table->dropColumn('id_formattime');
        });
    }
}
