<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswererQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answerer_quiz', function (Blueprint $table) {
            $table->id();

            $table->foreignId('answerer_id')->constrained()
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');
            $table->foreignId('quiz_id')->constrained()
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
        Schema::dropIfExists('answerer_quiz');
    }
}
