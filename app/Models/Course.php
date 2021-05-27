<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\Course\Traits\HasCategories;

class Course extends Model
{

    use HasFactory, HasCategories;
    
    public $fillable = [
        'discription',
        'title',
        'poster',
        'banner',
        'status',
        'slug',
        'teacher_id'
    ];
    
    public function teacher(){
        return $this->belongsTo(User::class,'teacher_id','id');
    }
    public function category(){
        return $this->belongsToMany(Category::class,'course_category','course_id','category_id');
    }
    public function seasons(  ){
        return $this->hasMany(Season::class);
    }
    public function episodes(){
        return $this->hasMany(Episode::class);
    }
}
