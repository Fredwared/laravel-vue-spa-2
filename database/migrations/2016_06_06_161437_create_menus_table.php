<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->comment('id da prórpia tabela');
            $table->string('name')->comment('nome');
            $table->string('title')->nullable()->comment('titulo');
            $table->string('route')->nullable()->comment('rota de acesso url');
            $table->string('icon')->nullable()->comment('icone do menu');
            $table->boolean('aba')->default(0)->comment('registro é uma aba ou não');
            $table->integer('order')->comment('ordem de visualização');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `menus` comment 'Menu'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
