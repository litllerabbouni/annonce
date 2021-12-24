<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unque(); // Primary key use Uuid
            // $table->dateTime('meeting_at')->default(DB::raw('CURRENT_TIMESTAMP')); // date par defaut
            $table->timestamp('meeting_at')->nullable();
            $table->string('address')->nullable();
            $table->boolean('active')->default(false);
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('meetings');
    }
}
