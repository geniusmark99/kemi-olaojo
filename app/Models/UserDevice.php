<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDevice extends Model
{
    protected $fillable  = ['user_id', 'device_name', 'ip_address', 'user_agent', 'is_trusted'];
}
