<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->Increments('id');
            $table->text('food_name');
            $table->unsignedInteger('hotel_id');
            $table->integer('category');
            $table->unsignedInteger('food_price');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            // $table->foreign('category')->references('category_id')->on('foods_category')->onDelete('cascade');
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
        Schema::dropIfExists('menus');
    }
}
