<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DoctorTimeSlot;

class AppointmentController extends Controller
{
    public function getTimeSlots(Request $request) {
        $doctor_id = $request->get('doctor_id');
        $date = $request->get('date');
    
        // Fetch time slots for the selected doctor on the selected date with available tokens
        $time_slots = DoctorTimeSlot::where('doctor_id', $doctor_id)
                                    ->where('date', $date)
                                    ->where('available_token', '>', 0) // Only available time slots
                                    ->get();
    
        return response()->json($time_slots);
    }
    
}
