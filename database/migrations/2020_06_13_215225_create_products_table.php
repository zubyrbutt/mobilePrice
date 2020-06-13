<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('mobileName');
            $table->integer('mobilePrice');
            $table->string('display');
            $table->string('processor');
            $table->string('frontCamera');
            $table->string('rearCamera');
            $table->integer('ram');
            $table->integer('storage');
            $table->integer('batteryCapacity');
            $table->integer('os');
            $table->string('marketStatus')->nullable();
            $table->string('images')->nullable();
            $table->text('summary')->nullable();
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
        Schema::dropIfExists('products');
    }
}
