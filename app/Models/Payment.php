<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;


    protected $fillable = ['user_id', 'course_id', 'amount'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
