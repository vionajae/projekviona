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
        Schema::create('spp',function(Blueprint $table){
            $table->integer('id_spp');
            $table->integer('tahun');
            $table->integer('nominal');
            $table->timestamps();
            $table->primary('id_spp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('spp');
    }
};
