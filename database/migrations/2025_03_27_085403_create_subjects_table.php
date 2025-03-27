<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Subject Name
            $table->text('description')->nullable(); // Subject Description (optional)
            $table->foreignId('teacher_id')->constrained('teachers')->onDelete('cascade'); // Foreign Key
            $table->timestamps(); // Created_at and Updated_at timestamps
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
