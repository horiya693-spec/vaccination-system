<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'appointment';

    protected $fillable = [
        'child_id',
        'vaccination_id',
        'hospital_id',
        'appointment_date',
        'status',
    ];

    protected $casts = [
        'appointment_date' => 'date',
    ];

    public function child()
    {
        return $this->belongsTo(child::class, 'child_id');
    }

    public function vaccination()
    {
        return $this->belongsTo(vaccination::class, 'vaccination_id');
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }
}