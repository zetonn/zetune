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
        Schema::create('data_music', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('artist');
            $table->string('genre');
            $table->string('music_name');
            $table->mediumText('music_file');
            $table->date('tgl_rilis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_music');
    }
};
