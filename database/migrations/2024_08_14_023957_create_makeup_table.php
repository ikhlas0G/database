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
        Schema::create('makeup', function (Blueprint $table) {
            $table->id();
            $table->string("img");
            $table->string("name");
            $table->string("description");
            $table->double("price", 16, 8);
            $table->integer("discount")->nullable();
            $table->boolean("best_seller")->nullable();
            $table->boolean("new_arrival")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makeup');
    }
};
