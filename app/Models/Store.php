<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'store_id';

    public function details(): MorphMany
    {
        return $this->morphMany(Detail::class, 'detailable');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'store_id');
    }

    public function variantStocks()
    {
        return $this->hasMany(VariantStock::class, 'store_id');
    }

    public function users()
    {
        return $this->hasMany(StoreUser::class, 'store_id');
    }
}
