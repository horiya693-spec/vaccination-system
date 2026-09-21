<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hospitalstock extends Model
{
       protected $table = 'hospiatlstock';

    protected $fillable = [
        'hospital_id',
        'vaccination_id',
        'status',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }

    public function vaccination()
    {
        return $this->belongsTo(Vaccination::class, 'vaccination_id');
    }
}
