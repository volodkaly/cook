<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_id extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user() {
        
            return $this->belongsTo(User::class);
            
        }
}
