<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;


class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course_title', 'course_code', 'course_slug', 'course_description', 'course_video_url', 'course_thumbnail_url', 'course_price'];



    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            $course->course_slug = Str::slug($course->course_title, '-') . '-' . Str::random(8);
        });

        static::updating(function ($course) {
            if ($course->isDirty('course_title')) {
                $course->course_slug = Str::slug($course->course_title, '-') . '-' . Str::random(8);
            }
        });
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user');
    }


    public function cbtQuestions()
    {
        return $this->hasMany(CbtQuestion::class, 'course_code', 'course_code'); // Link by course_code
    }




    public function isUnlockedBy($user)
    {
        return $user->payments()->where('course_id', $this->id)->exists();
    }


    public function isEnrolled()
    {
        return $this->hasMany(UserCourse::class)->where('user_id', auth()->id())->exists();
    }

    // public function questions()
    // {
    //     return $this->hasMany(CBTQuestion::class);
    // }
}
