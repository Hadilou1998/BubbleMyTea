<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->integer('storeId')->unsigned();
            $table->foreign('storeId')->references('id')->on('stores')->onDelete('cascade');
            $table->enum('status', ['In Progress', 'Waiting For Pick-up', 'Picked-up'])->default('In Progress');
            $table->timestamp('when_collect', $precision = 0);
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
        $table->dropForeign('lists_userId_foreign');
        $table->dropIndex('lists_userId_index');
        $table->dropColumn('userId');

        $table->dropForeign('lists_storeId_foreign');
        $table->dropIndex('lists_storeId_index');
        $table->dropColumn('storeId');

        Schema::dropIfExists('commands');
    }
}
