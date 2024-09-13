<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription; // Import the Prescription model
use App\Notifications\SendPrescriptionNotification;
use Illuminate\Support\Facades\Notification;

class PharmacyController extends Controller
{
    public function viewprescription()
    {
        return view('pharmacy.viewprescription');
    }

    public function prescription()
    {
        $prescriptions = Prescription::all(); // Fetch prescriptions using the Prescription model
        return view('pharmacy.viewprescription', ['prescriptions' => $prescriptions]); // Pass prescriptions to the view
    }
    public function sendprescription(Request $request, $id)
    {
        // Fetch the prescription data
        $prescriptions = Prescription::findOrFail($id);

        // Extract form data
        $name = $request->input('name');
        $age = $request->input('age');
        $idNumber = $request->input('idNo');
        $message = "Medicine packing completed.";

        // Prepare details for email notification
        $details = [
            'name' => $name,
            'age' => $age,
            'idNo' => $idNumber,
            'message' => $message,
        ];

        // Notify user about the email
        $prescriptions->notify(new SendPrescriptionNotification($details));

        // Redirect back with success message
        return redirect()->back()->with('message', 'Email sent successfully!');
    }
    
}
