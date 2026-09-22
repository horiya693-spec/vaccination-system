<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{

    protected $table = 'hospitals';

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone',
    ];


  

    // Hospital ke vaccines/stock
    public function stock()
    {
        return $this->hasMany(hospitalstock::class, 'hospital_id');
    }

    // Hospital ki appointments
    public function appointments()
    {
        return $this->hasMany(Booking::class, 'hospital_id');
    }

    protected $fillable = [ 'name', 'email', 'password', 'address','phone' ];

}
