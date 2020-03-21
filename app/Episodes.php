<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodes extends Model
{
    protected $table = 'episodes';

    protected $fillable = [
        'series_id',
        'title',
        'description',
        'duration',
        'airing_day',
        'airing_time',
        'thumbnail',
        'video_content',
        ];



    public function Series(){
        return $this->belongsTo('App\Series','series_id','id');

    }
}
