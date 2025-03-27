<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('teachers', function (Blueprint $table) {
        $table->dropColumn('hobby'); // Drop the hobby column
    });
}

public function down()
{
    Schema::table('teachers', function (Blueprint $table) {
        $table->string('hobby')->nullable(); // Recreate the hobby column if rolled back
    });
}

};
