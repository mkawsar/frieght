<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_freight_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid');
            $table->unsignedInteger('product_id')->unsigned();
            $table->string('shipper_account_no')->nullable();
            $table->string('recipient_account_no')->nullable();
            $table->string('shipper_country')->nullable();
            $table->string('recipient_country')->nullable();
            $table->string('shipper_postal_code')->nullable();
            $table->string('recipient_postal_code')->nullable();
            $table->string('shipper_state_code')->nullable();
            $table->string('recipient_state_code')->nullable();
            $table->string('shipper_city')->nullable();
            $table->string('recipient_city')->nullable();
            $table->string('street_line')->nullable();
            $table->string('item_id')->nullable();
            $table->string('package_type')->nullable();
            $table->string('freight_class')->nullable();
            $table->string('product_quantity')->nullable();
            $table->string('total_base_charge')->nullable();
            $table->string('total_net_charge')->nullable();
            $table->string('total_sur_charges')->nullable();
            $table->string('currency')->nullable();
            $table->json('freight_rated_data')->nullable();
            $table->unsignedInteger('created_by')->unsigned()->nullable();
            $table->unsignedInteger('updated_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_freight_rates');
    }
};
