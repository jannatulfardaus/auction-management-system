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
            $table->integer('Category_id');
            $table->integer('user_id');
            $table->string('name',200);
            $table->text('description')->nullable;
            $table->double('base_price',10,2)->default(0.00);
            $table->double('sold_price',10,2)->default(0.00);
            $table->date('expired_date');
            $table->string('image')->nullable();
            $table->string('pro_buyer');
            $table->string('status',10)->default('pending');
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
