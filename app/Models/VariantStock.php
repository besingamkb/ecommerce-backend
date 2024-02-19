<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VariantStock extends Model
{
    use HasFactory, SoftDeletes;

    public function variant()
    {
        return $this->belongsTo(Variant::class, 'variant_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }
}
