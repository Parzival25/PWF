<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymets', function (Blueprint $table) {
            $table->id();
            $table->string('amount');
            $table->string('description', 1000)->nullable();;
            $table->string('imagen')->nullable(); 
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('party_id')->references('id')->on('partys');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
