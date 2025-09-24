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
        Schema::create('package_details', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->date('renewal_date')->nullable();
            $table->integer('allowed_properties')->default(0);
            $table->integer('remaining_properties')->default(0);
            $table->integer('my_properties')->default(0);
            $table->integer('approved_properties')->default(0);
            $table->integer('not_approved_properties')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_details');
    }
};
