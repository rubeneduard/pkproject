<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalBackground extends Model
{
    use HasFactory;

    protected $fillable = [
        'backgroundid',
        'school',
        'address',
        'type',
        'yeargraduated',
        'studentid',
        'created_at',
        'updated_at'
    ];

    protected $table = 'educational_background';

    protected $primaryKey = 'backgroundid';
}
