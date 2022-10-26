<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_reciept extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Products() {
        return $this->hasOne(Products::class);
        }

        public function Receipt() {
            return $this->hasOne(Reciepts::class);
            }

            public function user() {
                return $this->belongsTo(User::class);
                }

}
