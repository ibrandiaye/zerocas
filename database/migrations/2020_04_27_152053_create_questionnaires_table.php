<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->id();
            $table->string('commerce');
            $table->string('maison');
            $table->string('salon');
            $table->string('multiservice');
            $table->string('arret');
            $table->string('boulangerie');
            $table->string('marche');
            $table->string('grandplace');
            $table->string('savon');
            $table->string('detergent');
            $table->string('intrusion');
            $table->unsignedBigInteger('commune_id');
            $table->foreign('commune_id')
                ->references('id')
                ->on('communes');
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
        Schema::dropIfExists('questionnaires');
    }
}
