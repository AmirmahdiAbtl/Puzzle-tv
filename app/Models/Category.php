<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = [
        'title',
    ];
   public function course(){
       return $this->belongsToMany(Course::class,'course_category','category_id','course_id');
   }
    use HasFactory;
}
