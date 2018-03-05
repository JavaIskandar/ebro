<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_product')
                ->unsigned();
            $table->foreign('id_product')
                ->references('id')
                ->on('products')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->integer('id_design')
                ->unsigned();
            $table->foreign('id_design')
                ->references('id')
                ->on('designs')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('design_products');
    }
}
