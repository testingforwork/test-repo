<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            $table->string('id', 5);
            $table->primary('id');
            $table->string('loginName', 30);
            $table->string('loginPswd');
            $table->string('isLoggedIn', 1);
//            $table->string('drvId', 5);
//            $table->foreign('drvId')->references('id')->on('Driver');
//            $table->string('custId', 5);
//            $table->foreign('custId')->references('id')->on('Customer');
//            $table->string('suppId', 5);
//            $table->foreign('suppId')->references('id')->on('Supplier');
//            $table->string('adminId', 5);
//            $table->foreign('adminId')->references('id')->on('Admin');
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
        Schema::drop('User');
    }
}
