<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class vaccination extends Model
{
    protected $table = 'vaccinations';

    protected $fillable = [
        'Vaccine_Name',
        'Dose_Number',
        'Target_Age',
    ];

    public function childVaccinations(): HasMany
    {
        return $this->hasMany(
            vaccineschild::class,
            'vaccination_id'
        );
    }
}