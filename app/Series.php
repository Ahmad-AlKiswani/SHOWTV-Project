<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = 'series';

    protected $fillable = ['title', 'description', 'show_day', 'show_time', 'thumbnail'];
}
