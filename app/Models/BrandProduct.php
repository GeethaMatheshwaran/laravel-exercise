<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandProduct extends Model
{
    use HasFactory;
    protected $table = 'brand_products';

    public function BrandCategory()
    {
        return $this->belongsTo(BrandProduct::class);
    }

    // Define a method to retrieve the state of the city
    public function Brand()
    {
        return $this->BrandCategory->Brand;
    }

}
