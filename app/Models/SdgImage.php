<?php

namespace App\Models;

use App\Models\Sustainability;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SdgImage extends Model
{
    use HasFactory;

    public function sustainability()
    {
        return $this->belongsTo(Sustainability::class);
    }
}
