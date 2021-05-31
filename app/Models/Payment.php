<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $fillable = [
        "start_sub",
        'expire_sub',
        "name",
        "price",
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
