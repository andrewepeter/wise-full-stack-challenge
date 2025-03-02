<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;

    protected $table = 'job_postings';

    protected $fillable = [
        'title', 
        'company',
        'location',
        'salary',
        'description',
        'requirements',
        'position_type',
        'date_posted'
    ];
    
    protected $casts = [
        'requirements' => 'array',
    ];
}
