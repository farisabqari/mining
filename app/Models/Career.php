<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'department',
        'location',
        'description',
        'requirements',
        'status',
    ];

    public function scopeOpen($query)
    {
        return $query->where('status', 'open');
    }
}
