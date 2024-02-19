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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',50);
            $table->string('stazPartenza',50);
            $table->string('stazArrivo',50);
            $table->dateTime('orarioPartenza');
            $table->dateTime('orarioArrivo');
            $table->string('codice',20);
            $table->tinyInteger('carrozze');
            $table->boolean('orario');
            $table->boolean('cancellato');
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
        Schema::dropIfExists('trains');
    }
};
