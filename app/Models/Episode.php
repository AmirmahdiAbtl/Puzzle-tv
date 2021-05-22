<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public $fillable = [
        "season",
        'title',
        'slug',
        'freeable',
        'video',
        'episode_number',
        'season_id',
        'course_id'
    ];
    public function season(){
        return $this->belongsTo(Season::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    use HasFactory;
}
