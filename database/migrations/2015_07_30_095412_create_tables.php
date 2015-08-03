<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Log::info('migration: create table');

        Schema::create('District', function (Blueprint $table) {
            $table->string('id', 5);
            $table->primary('id');
            $table->string('distName', 30);

        });

        //Users
        Schema::create('Admin', function (Blueprint $table) {
            $table->string('id', 5);
            $table->primary('id');
            $table->string('adminTel', 12);
        });

        Schema::create('Supplier', function (Blueprint $table) {
            $table->string('id', 5);
            $table->primary('id');
            $table->string('suppName', 30);
            $table->string('suppTel', 12);
            $table->string('suppAddr', 60);
        });

        Schema::create('Driver', function (Blueprint $table) {
            $table->string('id', 5);
            $table->primary('id');
            $table->string('drvName', 30);
            $table->string('drvGender', 1);
        });

        Schema::create('Customer', function (Blueprint $table) {
            $table->string('id', 5);
            $table->primary('id');
            $table->string('custName', 30);
            $table->string('custGender', 1);
            $table->date('custDOB');
            $table->string('custTel', 12);
            $table->string('custAddr', 60);
            $table->string('distId', 5);
            $table->foreign('distId')->references('id')->on('District');
        });

        //Products
        Schema::create('Category', function (Blueprint $table) {
            $table->string('id', 5);
            $table->primary('id');
            $table->string('catName', 30);
            $table->string('catParent', 5);
            $table->foreign('catParent')->references('id')->on('Category');
        });

        Schema::create('Product', function (Blueprint $table) {
            $table->string('id', 5);
            $table->primary('id');
            $table->string('prodName', 30);
            $table->double('prodPrice', 8, 2);
            $table->string('prodPhoto', 30);
            $table->integer('stockQty');
            $table->string('catId', 5);
            $table->foreign('catId')->references('id')->on('Category');
            $table->string('suppId', 5);
            $table->foreign('suppId')->references('id')->on('Supplier');
        });

        //Orders
        Schema::create('Schedule', function (Blueprint $table) {
            $table->string('id', 5);
            $table->primary('id');
            $table->date('jobDate');
            $table->string('drvId', 5);
            $table->foreign('drvId')->references('id')->on('Driver');
            $table->string('distId', 5);
            $table->foreign('distId')->references('id')->on('District');
        });

        Schema::create('CustOrder', function (Blueprint $table) {
            $table->string('id', 5);
            $table->primary('id');
            $table->date('ordDate');
            $table->double('ordDiscount', 8, 2);
            $table->string('deliAddr', 60);
            $table->string('custId', 5);
            $table->foreign('custId')->references('id')->on('Customer');
            $table->string('distId', 5);
            $table->foreign('distId')->references('id')->on('District');
            $table->string('jobId', 5);
            $table->foreign('jobId')->references('id')->on('Schedule');
        });

        //Product + Order
        Schema::create('OrderLine', function(Blueprint $table) {
            $table->string('prodId', 5);
            $table->string('ordId', 5);
            $table->primary(['prodId', 'ordId']);
            $table->foreign('prodId')->references('id')->on('Product');
            $table->foreign('ordId')->references('id')->on('CustOrder');
            $table->double('actualPrice', 8, 2);
            $table->integer('qty');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Log::info('migration: rollback create table');
        Schema::dropIfExists('OrderLine');
        Schema::dropIfExists('CustOrder');
        Schema::dropIfExists('Schedule');
        Schema::dropIfExists('Product');
        Schema::dropIfExists('Category');
        Schema::dropIfExists('Customer');
        Schema::dropIfExists('Driver');
        Schema::dropIfExists('Supplier');
        Schema::dropIfExists('Admin');
        Schema::dropIfExists('District');
    }
}
