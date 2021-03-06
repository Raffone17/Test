<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientToRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_to_recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ingredient_id')->unsigned();
            $table->integer('recipe_id')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('ingredient_to_recipes', function($table) {
             $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');
             $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ingredient_to_recipes');
    }
}
