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
            $table->timestamp('date_added')->nullable(); // Add date_added column
        });
    }
    
    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropColumn('date_added'); // Drop date_added column if rolling back migration
        });
    }
    
};
