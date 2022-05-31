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
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('party', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description', 1000)->nullable();;
            $table->string('imagen');
            $table->string('imagen2')->nullable();
            $table->string('imagen3')->nullable();
            $table->tinyInteger('confirmed')->default(0);            
            $table->enum('status', ['without starting', 'in progress','finished'])->default('without starting');
            $table->tinyInteger('status')->default(0);
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('package_id')->references('id')->on('packages');
            $table->timestamps();

        });
    }
};
