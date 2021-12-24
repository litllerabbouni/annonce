<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->timestamp('added_at', $precision = 0);
            $table->unsignedSmallInteger('contribution_year');
            $table->string('contribution_month', 20);
            $table->unsignedDecimal('amount', $precision = 8, $scale = 2);
            $table->foreignId('periode_id');
            $table->foreignId('user_benefit_id');
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
        Schema::dropIfExists('contributions');
    }
}
