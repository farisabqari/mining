<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'career_id',
        'full_name',
        'email',
        'phone',
        'address',
        'birth_date',
        'gender',
        'education',
        'university',
        'gpa',
        'experience_years',
        'current_position',
        'expected_salary',
        'cv_file',
        'diploma_file',
        'ktp_file',
        'certificate_file',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
        ];
    }

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
