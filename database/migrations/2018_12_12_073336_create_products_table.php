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
            $table->increments('id');
            $table->string('id_sequence')->nullable();
            $table->string('name');
            $table->string('picture')->nullable();
            $table->string('time')->nullable();
            $table->string('where')->nullable();
            $table->string('source')->nullable();
            $table->integer('price');
            $table->string('kind');
            $table->string('kind_id')->nullable();
            $table->string('stock');
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
