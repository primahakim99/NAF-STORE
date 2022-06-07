<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customerID');
            $table->foreign('customerID')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('emailAddress');
            $table->string('country');
            $table->string('postalCode');
            $table->string('island');
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
        Schema::dropIfExists('billing_addresses');
    }
}
