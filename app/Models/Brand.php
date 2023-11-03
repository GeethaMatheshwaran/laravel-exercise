<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public function BrandProduct(){
        return $this->hasManyThrough(BrandProduct::class,BrandCategory::class);
    }

    public function BrandCategory(){
        return $this->hasMany(BrandCategory::class);
    }
}
