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
        Schema::create('allfoods', function (Blueprint $table) {

            $table->id();
            $table->string('food_type')->nullable();
            $table->string('image')->nullable();
            $table->string('food_name')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
            
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
        Schema::dropIfExists('allfoods');
    }
};
