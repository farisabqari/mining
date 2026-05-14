<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SustainabilityReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'file',
        'year',
    ];

    protected function casts(): array
    {
        return [
            'year' => 'integer',
        ];
    }
}
