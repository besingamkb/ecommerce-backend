<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variant extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'variant_id';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function details(): MorphMany
    {
        return $this->morphMany(Detail::class, 'detailable');
    }
}
