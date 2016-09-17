<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phong', function(Blueprint $table){
            $table->increments('maphong');
            $table->integer('manha')->unsigned();
            $table->foreign('manha')->references('manha')->on('daynha')->onDelete('cascade');
            $table->string('tenphong');
            $table->string('songuoitoida');
            $table->string('songuoidango');
            $table->string('ghichu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('phong');
    }
}
