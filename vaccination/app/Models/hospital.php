<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    protected $fillable = [ 'name', 'email', 'password', 'address','phone' ];
}
