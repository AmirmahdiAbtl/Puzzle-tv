<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public $fillable = [
        'title',
        'course_id',
    ];
    public function episodes(){
        return $this->hasMany(Episode::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
    use HasFactory;
}
