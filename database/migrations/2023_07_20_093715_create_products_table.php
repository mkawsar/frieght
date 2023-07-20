<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid');
            $table->string('title')->index('title')->nullable();
            $table->string('price')->index('price')->nullable();
            $table->string('currency')->nullable();
            $table->unsignedInteger('image_id')->unsigned();
            $table->string('uom')->nullable();
            $table->string('upc')->nullable();
            $table->string('sku')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('weight_type')->nullable();
            $table->string('status')->default('pending');
            $table->unsignedInteger('created_by')->unsigned()->nullable();
            $table->unsignedInteger('updated_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
