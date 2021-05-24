<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title','slug','sub_category'];
    use HasFactory;
    public function parentCategory(){
        return $this->belongsTo(Category::class ,'sub_category','id');
    }
    public function children(){
        return $this->hasMany(Category::class,'sub_category','id');
    }
    public function parentCategoryName(){
        return is_null($this->parentCategory)?'ندارد':$this->parentCategory->title;
    }
    public function post(){
        return $this->belongsToMany(Post::class,'course_category');
    }
   public function course(){
       return $this->belongsToMany(Course::class,'course_category','category_id','course_id');
   }
    use HasFactory;
}
