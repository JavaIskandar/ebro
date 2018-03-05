<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->integer('id_color')
                ->unsigned();
            $table->foreign('id_color')
                ->references('id')
                ->on('colors')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->integer('id_size')
                ->unsigned();
            $table->foreign('id_size')
                ->references('id')
                ->on('sizes')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->integer('id_material')
                ->unsigned();
            $table->foreign('id_material')
                ->references('id')
                ->on('materials')
                ->onUpdate('CASCADE')
                ->onUpdate('CASCADE');
            $table->integer('id_gender')
                ->unsigned();
            $table->foreign('id_gender')
                ->references('id')
                ->on('genders')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->integer('id_type')
                ->unsigned();
            $table->foreign('id_type')
                ->references('id')
                ->on('types')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
