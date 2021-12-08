<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('seller_id');
            $table->foreignId('category_id');
            $table->text('name');
            $table->text('description');
            $table->float('price');
            $table->text('brand');
            $table->string('image', 256)->nullable(); 
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('sellers')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('category_id')->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('restrict');

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
