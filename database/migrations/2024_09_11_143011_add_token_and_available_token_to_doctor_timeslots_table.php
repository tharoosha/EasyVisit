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
        Schema::table('doctortimeslots', function (Blueprint $table) {
            $table->integer('available_token')->default(0); // Available tokens for the time slot
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctortimeslots', function (Blueprint $table) {
            //
        });
    }
};
