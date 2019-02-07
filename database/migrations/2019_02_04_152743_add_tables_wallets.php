<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTablesWallets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table){
            $table->increments('id');            
            $table->integer('crypto_id');
            $table->integer('user_id');
            $table->float('montant');
            $table->float('montant_euro');
        });

        Schema::table('wallets', function (Blueprint $table) {
            $table->foreign('crypto_id')->references('id')->on('cryptos'); 
            $table->foreign('user_id')->references('id')->on('users');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallets');
    }
}
