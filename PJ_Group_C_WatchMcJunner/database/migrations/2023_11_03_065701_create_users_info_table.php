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
        Schema::create('users_info', function (Blueprint $table) {
            $table->id('users_info_id');
            $table->integer('users_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('phone');
            $table->string('email', 100);
            $table->string('address', 255);
            $table->string('dob', 12);
            $table->tinyInteger('decentralization');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_private');
    }
};
