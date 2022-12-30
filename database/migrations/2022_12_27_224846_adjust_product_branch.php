<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branchs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->timestamps();
        });

        Schema::create('product_branchs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('branch_id');

            $table->decimal('price', 8, 2);
            $table->integer('min_stock');
            $table->integer('max_stock');

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('branch_id')->references('id')->on('branchs');

            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['price', 'min_stock', 'max_stock']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price', 8, 2);
            $table->integer('min_stock');
            $table->integer('max_stock');
        });

        Schema::dropIfExists('product_branchs');

        Schema::dropIfExists('branchs');
    }
};
