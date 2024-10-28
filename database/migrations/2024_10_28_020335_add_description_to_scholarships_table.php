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
    Schema::table('scholarships', function (Blueprint $table) {
        $table->text('description')->nullable(); // atau $table->string('description')->nullable(); jika ingin tipe string
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('scholarships', function (Blueprint $table) {
            //
        });
    }
};
