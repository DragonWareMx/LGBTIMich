<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();

            $table->text('opcion')->nullable();     //texto de la opcion
            $table->enum('tipo', ['num', 'alfa'])->nullable();      //tipo de respuesta, numerico o alfanumerico
            $table->integer('minimo')->nullable();
            $table->integer('maximo')->nullable();
            
            $table->foreignId('question_id')->constrained()
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');

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
        Schema::dropIfExists('options');
    }
}
