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
        Schema::create('meters', function (Blueprint $table) {
            $table->id();
            $table->string('mether_type');
            $table->string('meter_id')->unique();
            $table->foreignId('area_id')->constrained('areas')->onDelete('cascade');
            $table->foreignId('owner_id')->constrained('owners')->onDelete('cascade');
            $table->string('city');
            $table->string('area');
            $table->string('flat');
            $table->string('post_code');
            $table->integer('use_unit')->default(0);
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
        Schema::dropIfExists('meters');
    }
};
