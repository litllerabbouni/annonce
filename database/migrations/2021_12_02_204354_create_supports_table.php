<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportsTable extends Migration
{
    /**
     * Run the migrations.
     * Pour les cotisations exceptionnelles.
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->timestamp('added_at', $precision = 0);
            $table->unsignedDecimal('amount', $precision = 10, $scale = 2);
            $table->foreignId('participation_id');
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('supports');
    }
}
