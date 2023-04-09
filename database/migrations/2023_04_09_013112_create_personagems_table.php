<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personagems', function (Blueprint $table) {
            $table->id();
            $table->string('historia');
            $table->string('objetivos');
            $table->integer('experiencia_total');
            $table->integer('experiencia_atual');
            $table->integer('nivel');
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
        Schema::dropIfExists('personagems');
    }
}
