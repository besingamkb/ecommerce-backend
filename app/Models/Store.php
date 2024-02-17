<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Store extends Model
{
    use HasFactory;

    protected $primaryKey = 'store_id';

    public function details(): MorphMany {
        return $this->morphMany(Detail::class, 'detailable');
    }
}
