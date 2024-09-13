<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    // Relationship with the DoctorTimeslot model
    public function timeSlots()
    {
        return $this->hasMany(DoctorTimeSlot::class, 'doctor_id');
    }
    
}
