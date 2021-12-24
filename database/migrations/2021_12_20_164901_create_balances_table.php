<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->string('expense_label')->nullable();
            $table->string('expense_operation')->nullable();
            $table->string('expense_sens')->nullable();
            $table->unsignedDecimal('expense_amount', $precision = 19, $scale = 2);
            $table->string('resource_label')->nullable();
            $table->string('resource_operation')->nullable();
            $table->string('resource_sens')->nullable();
            $table->unsignedDecimal('resource_amount', $precision = 19, $scale = 2);
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
        Schema::dropIfExists('balances');
    }
}
