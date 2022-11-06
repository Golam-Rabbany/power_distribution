<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meter_id')->constrained('meters')->onDelete('cascade');
            $table->integer('usage_unit')->default(0);
            $table->integer('gross_total')->default(0);
            $table->integer('vat')->default(0);
            $table->integer('net_total')->default(0);
            $table->integer('fine')->default(0);
            $table->integer('discount')->default(0);
            $table->integer('payable')->default(0);
            $table->integer('paid')->default(0);
            $table->date('year')->nullable();
            $table->date('month')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
};
