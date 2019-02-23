<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdBankToDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deposit_accounts', function (Blueprint $table) {
            $table->integer('id_bank')->unsigned()->unique(); 
            $table->foreign('id_bank', 'id_bank_deposits_foreign')
            ->references('id')
            ->on('banks')
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
            //
        });
    }
}
