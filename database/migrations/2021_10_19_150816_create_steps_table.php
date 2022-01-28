<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipeInstructions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('step');
            $table->longText('text');
            $table->string('photo', 2048)->nullable();
            
            $table->foreignId('recipe_id')->references('id')->on('recipes');

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
        Schema::dropIfExists('recipeInstructions');
    }
}
