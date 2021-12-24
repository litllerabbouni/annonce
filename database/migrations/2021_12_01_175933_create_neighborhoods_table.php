<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeighborhoodsTable extends Migration
{
    /**
     * Run the migrations.
     * Pour les quartiers au village.
     * @return void
     */
    public function up()
    {
        Schema::create('neighborhoods', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name', 50)->unique();
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('neighborhoods');
    }
}
