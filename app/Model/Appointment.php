<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['user_id', 'title', 'description'];
}
