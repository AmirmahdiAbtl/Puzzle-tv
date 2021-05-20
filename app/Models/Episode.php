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
        'file',
        'episode_number'
    ];
    public function season(){
        return $this->belongsTo(Season::class);
    }
    use HasFactory;
}
