<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\product_reciept;

class Reciepts extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product_reciept()
    {
        return $this->hasMany(product_reciept::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reciepts()
    {
        return $this->hasMany(Reciepts::class);
    }
}
