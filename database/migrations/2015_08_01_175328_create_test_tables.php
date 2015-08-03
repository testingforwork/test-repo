<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateTestTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User2', function (Blueprint $table) {
            $table->string('id');
            $table->primary('id');
            $table->string('name');
        });

        Schema::create('Role', function (Blueprint $table) {
            $table->string('id');
            $table->primary('id');
            $table->string('name');
        });

        Schema::create('UserRole', function (Blueprint $table) {
            $table->string('userId');
            $table->foreign('userId')->references('id')->on('User2');
            $table->string('roleId');
            $table->foreign('roleId')->references('id')->on('Role');
            $table->primary(['userId', 'roleId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('UserRole');
        Schema::drop('Role');
        Schema::drop('User2');
    }
}
