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

        Schema::create('cbt_questions', function (Blueprint $table) {
            $table->id();
            $table->string('course_code');
            $table->text('question');
            $table->string('option_a');
            $table->string('option_a_image')->nullable();
            $table->string('option_b');
            $table->string('option_b_image')->nullable();
            $table->string('option_c');
            $table->string('option_c_image')->nullable();
            $table->string('option_d');
            $table->string('option_d_image')->nullable();
            $table->enum('correct_answer', ['A', 'B', 'C', 'D']);
            $table->string('question_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cbt_questions');
    }
};
