<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CBTQuestion extends Model
{
    use HasFactory;
    protected $table = 'cbt_questions';
    protected $fillable = [
        'course_code',
        'question',
        'option_a',
        'option_a_image',
        'option_b',
        'option_b_image',
        'option_c',
        'option_c_image',
        'option_d',
        'option_d_image',
        'correct_answer',
        'question_image',
    ];



    public function course()
    {
        return $this->belongsTo(Course::class, 'course_code', 'course_code');
    }

    // public function course()
    // {
    //     return $this->belongsTo(Course::class);
    // }
}
