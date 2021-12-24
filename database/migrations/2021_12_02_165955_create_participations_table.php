<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->timestamp('added_at', $precision = 0);
            $table->unsignedTinyInteger('added_day',)->nullable();
            $table->unsignedTinyInteger('added_month',)->nullable();
            $table->unsignedSmallInteger('added_year',)->nullable();
            $table->foreignId('group_id');
            $table->foreignId('enrol_id');
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
        Schema::dropIfExists('participations');
    }
}
