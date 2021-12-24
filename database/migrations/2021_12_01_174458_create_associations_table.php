<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
            $table->timestamp('added_at', $precision = 0);
            $table->string('name');
            $table->string('sigle', 20);
            $table->string('mobile', 25);
            $table->string('phone', 20)->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('bp', 150)->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('associations');
    }
}
