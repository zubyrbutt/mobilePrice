<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAndroidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('android', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('price');
            $table->string('os');
            $table->string('ui')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('weight')->nullable();
            $table->string('sim')->nullable();
            $table->string('colors')->nullable();
            $table->string('2gBand')->nullable();
            $table->string('3gBand')->nullable();
            $table->text('4gBand')->nullable();
            $table->text('cpu')->nullable();
            $table->string('chipset')->nullable();
            $table->string('gpu')->nullable();
            $table->string('technology')->nullable();
            $table->string('size')->nullable();
            $table->string('resolution')->nullable();
            $table->string('protection')->nullable();
            $table->string('extraFeatures')->nullable();
            $table->string('builtIn')->nullable();
            $table->string('card')->nullable();
            $table->text('main')->nullable(); //camera features
            $table->text('Cfeatures')->nullable();
            $table->text('front')->nullable();
            $table->string('wlan')->nullable();
            $table->string('bluetooth')->nullable();
            $table->string('gps')->nullable();
            $table->string('usb')->nullable();
            $table->string('nfc')->nullable();
            $table->string('data')->nullable();
            $table->text('sensors')->nullable();
            $table->string('audio')->nullable();
            $table->string('browser')->nullable();
            $table->string('messaging')->nullable();
            $table->string('games')->nullable();
            $table->string('torch')->nullable();
            $table->text('fExtra')->nullable(); //feature extras
            $table->string('capacity')->nullable();
            $table->string('bExtra')->nullable();
            $table->string('ratings')->nullable();
            $table->string('images');
            $table->text('note')->nullable();
            $table->text('description');

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
        Schema::dropIfExists('android');
    }
}
