<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class child extends Model
{
   use HasFactory;

    // 1. Tell Laravel the exact name of your database table
    protected $table = 'children';

    // 2. Allow these columns to accept data (Mass Assignment Protection)
    protected $fillable = [
    'Parent_Id', // Add this line
    'Child_Name',
    'Father_Name',
    'Mother_Name',
    'Child_Gender',
    'DOB',
    'Phone_Number',
    'Address',
];


    // 3. Automatically convert the DOB string into a clean Carbon Date instance
    protected $casts = [
        'DOB' => 'date',
    ];

    /**
     * Get the parent user that owns this child.
     */
  
}
