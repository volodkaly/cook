<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use App\Models\Reciepts;
use App\Models\User;

class product_reciept extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function products()
    {
        return $this->hasOne(Products::class);
    }

    public function receipts()
    {
        return $this->hasOne(Reciepts::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
