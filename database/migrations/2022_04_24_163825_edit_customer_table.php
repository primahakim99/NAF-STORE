<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->unsignedBigInteger('defaultPayment')->after('ID_User')->nullable();
            $table->foreign('defaultPayment')->references('id')->on('payments')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('defaultBillingAddress')->after('ID_User')->nullable();
            $table->foreign('defaultBillingAddress')->references('id')->on('billing_addresses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
