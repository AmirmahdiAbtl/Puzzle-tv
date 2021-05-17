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
        'episode_number'
    ];
    public function course(){
        return $this->belongsTo(Course::class);
    }
    use HasFactory;
}
