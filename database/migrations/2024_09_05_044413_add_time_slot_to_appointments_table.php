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
        Schema::table('appointments', function (Blueprint $table) {
            $table->integer('time_slot')->after('doctor');

            // Add foreign key constraint
            // $table->foreign('time_slot')->references('id')->on('doctor_time_slots')
            //       ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            // $table->dropForeign(['time_slot']);
            $table->dropColumn('time_slot');
        });
    }
};
