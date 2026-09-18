<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vaccination extends Model
{
    protected $fillable = ['vaccine_name', 'dose_number', 'target_age'];

}
