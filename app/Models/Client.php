<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'images',
        'featured'
    ];

    public function products()
    {
        return $this->belongsTo(Products::class);
    }
}
