<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('quiz_user', function (Blueprint $table) 
      {
        $table->id();
        // $table->foreign('user_id')->constrained()->onDelete('cascade');
        // $table->foreign('quizz_id')->constrained()->onDelete('cascade');
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('quiz_id');


        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('quiz_id')->references('id')->on('quizzes');

        $table->unique(['user_id', 'quiz_id']);
        $table->timestamps();
        });
    }
     
  /**
     * Reverse the migrations.
     */
  public function down(): void{Schema::dropIfExists('quiz_user');}
};