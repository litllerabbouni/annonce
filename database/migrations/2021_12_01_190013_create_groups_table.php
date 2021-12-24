<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     * Pour les groupes.
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique(); // Primary key use Uuid
            $table->string('label');
            $table->unsignedDecimal('contribution', $precision = 6, $scale = 2);
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
        Schema::dropIfExists('groups');
    }
}
