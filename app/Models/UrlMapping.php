<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlMapping extends Model
{
    use HasFactory;

    protected $fillable = [
        'suffix',
        'maps_to',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
