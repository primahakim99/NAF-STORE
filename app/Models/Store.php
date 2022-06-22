<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'storeName',
        'address',
        'description',
        'img'
    ];

    public function owner()
    {
        return $this->hasOne(User::class);
    }

    public function product()
    {
        return $this->hasMany(product::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
