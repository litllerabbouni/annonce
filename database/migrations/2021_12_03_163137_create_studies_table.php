<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     * Pour etudier les dclarations
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->timestamp('added_at', $precision = 0);
            $table->enum('decision', ['Validée', 'Annulée']);
            $table->unsignedDecimal('amount', $precision = 10, $scale = 2);
            $table->foreignId('participation_benefit_id');
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
        Schema::dropIfExists('studies');
    }
}
