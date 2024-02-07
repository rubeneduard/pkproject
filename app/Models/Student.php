<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //@var array 

    
    protected $fillable = [
        'studentid',
        'firstname',
        'lastname',
        'middlename',
        'suffix',
        'gender',
        'birthdate',
        'civilstatus',
        'contacino',
        'nationality',
        'occupation',
        'created_at',
        'updated_at'
    ];

    //@var string

    protected $table = 'students';


   // @var string

    protected $primaryKey = 'studentid';
}

