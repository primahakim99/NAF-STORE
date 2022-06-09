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
            $table->unsignedBigInteger('ID_Store');
            $table->foreign('ID_Store')->references('id')->on('stores')->onDelete('cascade')->onUpdate('cascade');
            $table->string('productName');
            $table->string('category');
            $table->text('description');
            $table->tinyInteger('stock');
            $table->Integer('weight(Gram)');
            $table->Integer('price(Rp)');
            $table->string('image');
            $table->timestamp('added_at');
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
