<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();

            $table->text('respuesta')->nullable();      //respuesta abierta del usuario, en caso de pregunta ABIERTA
            
            $table->foreignId('question_id')->constrained()
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');
            $table->foreignId('option_id')->nullable()
                                        ->constrained()
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');
            $table->foreignId('option_col_id')->nullable()
                                        ->constrained()
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');
            $table->foreignId('answerer_id')->constrained()
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
        Schema::dropIfExists('answers');
    }
}
