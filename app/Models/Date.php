<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $dates = ['starts_at', 'ends_at', 'created_at', 'updated_at', 'deleted_at'];
}