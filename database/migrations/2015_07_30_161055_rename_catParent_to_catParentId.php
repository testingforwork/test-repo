<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameCatParentToCatParentId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Category', function (Blueprint $table) {
            $table->renameColumn('catParent', 'catParentId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Category', function (Blueprint $table) {
            $table->renameColumn('catParentId', 'catParent');
        });
    }
}
