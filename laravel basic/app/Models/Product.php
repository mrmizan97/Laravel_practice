<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];

    public function variants()
    {
        return $this->belongsToMany(Variant::class, 'product_variants', 'variant_id', 'product_id')->withPivot('variant')->withTimestamps();

    }
    public function product_variants(){
        return $this->belongsTo(ProductVariant::class,'product_id');
    }
}
