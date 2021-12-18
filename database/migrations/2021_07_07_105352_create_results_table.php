<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email')->unique();
            $table->string('Physics');
            $table->string('Mathematics');
            $table->string('Biology');
            $table->string('Chemistry');
            $table->string('Additional Mathematics');
            $table->string('Pure Physics');
            $table->string('Computer/IT');
            $table->string('English');
            $table->string('commerce/Accounts');
            $table->string('A Level Physics');
            $table->string('A Level Biology');
            $table->string('A Level Chemistry');
            $table->string('Classical Mechanics');
            $table->string('Electricity');
            $table->string('Nuclear Physics');
            $table->string('Real Analysis');
            $table->string('Topology');
            $table->string('Optics');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
