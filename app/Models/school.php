<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
     use HasFactory;
     protected $fillable = ['sc_id', 'sc_name', 'sc_address', 'sc_tambon', 'sc_amp', 'sc_prove',
     'sc_zipcode', 'sc_tel', 'sc_email',
     ];
}
