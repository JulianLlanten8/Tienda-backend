<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            //$table->float('precio');
            $table->string('descripcion');
            $table->string('imagen');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('productos', function (Blueprint $table) {
            DB::statement('ALTER TABLE `productos` ADD column `precio` FLOAT AFTER nombre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
