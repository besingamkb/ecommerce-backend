<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class StoreUser extends Authenticatable
{
    use HasFactory, SoftDeletes, HasApiTokens, Notifiable;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'store_user_id';
    

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }
}
