<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('teaId')->unsigned();
            $table->foreign('teaId')->references('id')->on('teas')->onDelete('cascade');
            $table->integer('poppingId')->unsigned();
            $table->foreign('poppingId')->references('id')->on('poppings')->onDelete('cascade');
            $table->integer('milkId')->unsigned();
            $table->foreign('milkId')->references('id')->on('milks')->onDelete('cascade');
            $table->integer('pureeId')->unsigned();
            $table->foreign('pureeId')->references('id')->on('purees')->onDelete('cascade');
            $table->float('price');
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
        $table->dropForeign('lists_teaId_foreign');
        $table->dropIndex('lists_teaId_index');
        $table->dropColumn('teaId');

        $table->dropForeign('lists_poppingId_foreign');
        $table->dropIndex('lists_poppingId_index');
        $table->dropColumn('poppingId');

        $table->dropForeign('lists_milkId_foreign');
        $table->dropIndex('lists_milkId_index');
        $table->dropColumn('milkId');

        $table->dropForeign('lists_pureeId_foreign');
        $table->dropIndex('lists_pureeId_index');
        $table->dropColumn('pureeId');
        
        Schema::dropIfExists('recipes');
    }
}
