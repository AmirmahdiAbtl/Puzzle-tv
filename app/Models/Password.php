<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Password extends Model
{   
    public $timestamps = false;
    public $table = "password_resets";
    public $fillable = ['number','token','created_at'];
    use HasFactory;
}
