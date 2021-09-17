<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFamily extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Family', function (Blueprint $table) {
            $table->id();
            $table->string('fathersName', 100)->nullable;
            $table->string('mothersName', 100)->nullable;
            $table->string('sistersName', 100)->nullable;
            $table->string('brothersName', 100)->nullable;
            $table->string('Address', 100)->nullable;
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
        Schema::dropIfExists('Family');
    }
}
