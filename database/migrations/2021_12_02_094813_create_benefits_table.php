<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     * Pour les prestations.
     * @return void
     */
    public function up()
    {
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            // $table->uuid('id')->primary(); // Primary key use Uuid
            $table->uuid('uuid')->unique();
            $table->string('label');
            $table->unsignedDecimal('rate', $precision = 10, $scale = 2);
            $table->unsignedDecimal('contribution', $precision = 10, $scale = 2)->nullable();
            $table->longText('description')->nullable();
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('benefits');
    }
}
