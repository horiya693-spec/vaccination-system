<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vaccineschild extends Model
{
     protected $table = 'childvaccination';

    protected $fillable = [
        'child_id',
        'vaccination_id',
        'hospital_id',
        'vaccination_date',
        'status',
    ];

    protected $casts = [
        'vaccination_date' => 'date',
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
