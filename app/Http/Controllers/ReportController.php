<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;

class ReportController extends Controller
{
    public function summary()
    {
        $appointments = Appointment::all();

        // Group appointments by doctor name
        $appointmentsByDoctor = $appointments->groupBy('doctor');

        // Prepare summary data
        $summary = [];
        foreach ($appointmentsByDoctor as $doctor => $appointments) {
            $summary[] = [
                'doctor' => $doctor,
                'total' => $appointments->count(),
                'approved' => $appointments->where('status', 'approved')->count(),
                'Canceled' => $appointments->where('status', 'Canceled')->count(),
                'In progress' => $appointments->where('status', 'In progress')->count(),
            ];
        }

        // Pass data to view
        return view('admin.report_summary', compact('summary'));
    }

    public function stressSummary()
    {
        // Fetch users and their stress levels
        $stressData = User::select('firstName', 'lastName', 'email', 'stress_level') ->where('usertype', 0)->whereNotNull('stress_level')->get();

        // Pass data to the view
        return view('admin.stress_summary', compact('stressData'));
    }
}
