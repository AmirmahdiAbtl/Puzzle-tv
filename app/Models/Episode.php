<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public $fillable = [
        'title',
        'slug',
        'freeable',
        'episode_number',
        'video',
        'season_id',
        'course_id'
    ];
    public function season(){
        return $this->belongsTo(Season::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
    use HasFactory;
}
