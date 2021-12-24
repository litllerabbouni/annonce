<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name');
            $table->string('firstname')->nullable();
            $table->string('email')->nullable();
            $table->string('password');
            $table->timestamp('birthday')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->string('bp')->nullable();
            $table->string('address')->nullable();
            $table->boolean('admin')->default(false);
            $table->boolean('active')->default(false);
            $table->string('profession')->nullable();
            $table->tinyInteger('children')->nullable();
            $table->timestamp('added_at', $precision = 0)->nullable();
            $table->index(['name', 'birthday']);
            $table->unsignedBigInteger('created_by')->nullable();   // saisie par
            $table->unsignedBigInteger('updated_by')->nullable();   // modifer pars
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_seen')->nullable();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
