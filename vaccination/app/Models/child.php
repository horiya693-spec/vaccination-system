<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class child extends Model
{
    use HasFactory;

    protected $table = 'children';

    protected $fillable = [
        'Parent_Id',
        'Child_Name',
        'Father_Name',
        'Mother_Name',
        'Child_Gender',
        'DOB',
        'Phone_Number',
        'Address',
    ];

    protected $casts = [
        'DOB' => 'date',
    ];

    // Child ka parent
    public function parent(): BelongsTo
    {
        return $this->belongsTo(User::class, 'Parent_Id');
    }

    // Child ki vaccination records
    public function childVaccinations(): HasMany
    {
        return $this->hasMany(
            vaccineschild::class,
            'child_id'
        );
    }
}