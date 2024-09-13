<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorTimeslot extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'doctortimeslots';

    protected $fillable = [
        'date', 
        'start_time', 
        'end_time', 
        'no_of_tokens', 
        'details',
        'doctor_id',
        'available_token',
    ];

    // A time slot belongs to a doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}

