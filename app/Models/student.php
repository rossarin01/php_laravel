<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = ['st_id', 'st_name','st_program', 'st_address', 'st_tambon', 'st_amp', 'st_prove',
    'st_zipcode', 'st_tel', 
    ];
}
