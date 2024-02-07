<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    protected $fillable = [
        'parentsid',
        'firstname',
        'lastname',
        'middlename',
        'suffix',
        'gender',
        'type',
        'civilsatatus',
        'occupation',
        'income',
        'studentid',
        'created_at',
        'updated_at'
    ];

    protected $table ='parents';

    protected $primaryKey = 'parentsid';
}
