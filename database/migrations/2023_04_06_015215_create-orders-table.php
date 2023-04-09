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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employeeId')->unsigned();
            $table->bigInteger('ClientId')->unsigned();
            $table->float('TotalePrice',8,2)->default(0);
            $table->String('paymentType')->default('cash');
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->foreign('ClientId')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('employeeId')->references('id')->on('employees')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
