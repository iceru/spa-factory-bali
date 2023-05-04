<?php

namespace App\Models;

use App\Models\SdgImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sustainability extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'number',
        'images',
        'bg_color'
    ];

    public function sdgImage()
    {
        return $this->hasMany(SdgImage::class);
    }
}
