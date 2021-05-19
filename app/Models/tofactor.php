<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tofactor extends Model
{
    public $fillable = [
        'user_id',
        'verify_number',
        'created_at'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
