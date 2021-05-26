<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title','slug','sub_category'];

    public function courses()
  {
    return $this->belongsToMany(Course::class);
  }

  public function children()
  {
    return  $this->hasMany(Category::class, 'sub_category');
  }

  public function childrenRecursive()
  {
    return $this->children()->with('childrenRecursive');
  }
}
