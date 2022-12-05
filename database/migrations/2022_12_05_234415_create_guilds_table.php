<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guilds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('cod', 4)->unique();
            $table->integer('realm');
            $table->integar('power');
            $table->integar('confrontation');
            $table->integar('gift');
            $table->integar('arena');
            $table->integar('fg');
            $table->integar('kvk');
            $table->integar('kill_bi');
            $table->integar('verifield');
            $table->integar('bonus_1');
            $table->integar('power_ok');
            $table->integar('confrontation_ok');
            $table->integar('gifit_ok');
            $table->integar('arena_ok');
            $table->integar('festival_ok');
            $table->integar('kvk_ok');
            $table->integar('kill_ok');
            $table->integar('bonus_2');
            $table->integar('total');
            $table->integar('ranking_edition');

            $table->integer('current_position');
            $table->integer('last_position');
            $table->integer('gain_position');
            $table->integer('position');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guilds');
    }
};
