<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participation_benefits', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->timestamp('added_at', $precision = 0);
            $table->timestamp('occurred_at', $precision = 0);
            $table->string('takeplace')->nullable();
            $table->longText('description')->nullable();
            $table->foreignId('participation_id');
            $table->foreignId('benefit_id');
            $table->index(['participation_id', 'benefit_id'])->nullable();
            $table->unsignedBigInteger('created_by')->nullable();   // saisie par
            $table->unsignedBigInteger('updated_by')->nullable();   // modifer pars
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
        Schema::dropIfExists('participation_benefits');
    }
}
