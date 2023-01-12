<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('telephoneId')->unsigned();
            $table->foreign('telephoneId')->references('id')->on('phones')->onDelete('cascade');
            $table->boolean('isAuthorized')->default('0');
            $table->string('photo-url')->nullable();
            $table->rememberToken();
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
        $table->dropForeign('lists_telephoneId_foreign');
        $table->dropIndex('lists_telephoneId_index');
        $table->dropColumn('telephoneId');
        
        Schema::dropIfExists('users');
    }
}
