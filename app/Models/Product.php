<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public function Orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class , 'order_detail');
    }

    protected $fillable = [
        'name',
        'image',
        'price',
        'quantity',
        'description',
    ];
}
