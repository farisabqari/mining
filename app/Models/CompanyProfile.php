<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $fillable = [
        'company_name',
        'tagline',
        'description',
        'vision',
        'mission',
        'hero_title',
        'hero_subtitle',
        'hero_video',
        'logo',
        'address',
        'email',
        'phone',
    ];
}
