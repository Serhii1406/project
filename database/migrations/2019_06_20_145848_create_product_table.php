<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('models')->nullable();
            $table->string('cost')->nullable();
            $table->string('diagonal')->nullable();
            $table->string('processor')->nullable();
            $table->string('videocard')->nullable();
            $table->string('memory')->nullable();
            $table->string('kilk')->nullable();
            $table->string('information')->nullable();
            $table->string('wallet')->nullable();
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
        Schema::dropIfExists('product');
    }
}
