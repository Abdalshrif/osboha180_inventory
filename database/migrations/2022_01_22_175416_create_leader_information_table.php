<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaderInformationTable extends Migration
{

    public function up()
    {
        //Table Of The Leaders
        Schema::create('leader_info', function (Blueprint $table) {
            $table->integer('id');
            $table->text('Name_Of_Leader')->unique();
            $table->integer('guided_Team_Number');
            $table->integer('monitor_Team_Number');
            $table->timestamps();
        });

        // Table Of The Weeks
        Schema::create('weeks', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('Week_Number');
            $table->date('Date_of_Week');
            $table->timestamps();
        });

        //  Table Of The Notes
        //  Schema::create('notes', function (Blueprint $table) {
        //     $table->integer('leader_id')->unsigned();
        //     $$table->integer('week_id')->unsigned();

        //     $table->foreign('leader_id')->references('id')->on('leader_info')
        //         ->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('week_id')->references('id')->on('weeks')
        //         ->onUpdate('cascade')->onDelete('cascade');

        //     $table->primary(['leader_id', 'week_id']);
        //     $table->timestamps();
        // });

    }

    public function down()
    {
        Schema::dropIfExists('leader_info');
        Schema::dropIfExists('weeks');
        // Schema::dropIfExists('notes');
    }
}
