<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolsTable extends Migration
{
    /**
     * Run the migrations.
     * Pour le montant des adhésions.
     * @return void
     */
    public function up()
    {
        Schema::create('enrols', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->timestamp('added_at', $precision = 0);
            $table->string('label');
            $table->string('description')->nullable();
            $table->unsignedDecimal('amount', $precision = 8, $scale = 2);
            $table->boolean('active')->default(false);
            $table->unsignedBigInteger('created_by')->nullable();   // saisie par
            $table->unsignedBigInteger('updated_by')->nullable();   
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
        Schema::dropIfExists('enrols');
    }
}
