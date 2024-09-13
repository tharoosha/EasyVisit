<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\Prescription;
use App\Models\DoctorTimeslot;
use App\Models\Doctor;
use App\Mail\AppointmentApproved;
use Illuminate\Support\Facades\Mail;


class DoctorController extends Controller
{  
    public function appointmentview()
    {
        return view('doctor.appointment');
    }

    public function myappointment()
    {
        $appoint = Appointment::where('user_id', Auth::id())->get();
        return view('doctor.appointment', compact('appoint'));
    }

    public function showAppointments()
    {
        $doctorName = Auth::user()->firstName;
        $appointments = Appointment::where('doctor', $doctorName)->get();
        return view('doctor.appointment', ['appointments' => $appointments]);
    }
    public function prescription_view($id, $name)
    {
        $appointments = Appointment::where('id', $id)->get();
        return view('doctor.prescription', compact('name', 'appointments'));
    }
    
  

    public function sendemail(Request $request, $id)
    {
        // Fetch the appointment data
        $appointment = Appointment::findOrFail($id);

        // Extract form data
        $name = $request->input('name');
        $dname = $request->input('dname');
        $age = $request->input('age');
        $idNumber = $request->input('idNo');
        $prescription = $request->input('Prescription');

        // Prepare details for email notification
        $details = [
            'name' => $name,
            'dname' => $dname,
            'age' => $age,
            'idNo' => $idNumber,
            'Prescription' => $prescription,
        ];

        // Notify user about the email
        $appointment->notify(new SendEmailNotification($details));

        // Redirect back with success message
        return redirect()->back()->with('message', 'Email sent successfully!');
    }
    public function doctorapproved($id)
    {
        $data=appointment::find($id);

        $data->status='approved';

        $data->save();

        return redirect()->back();

    }

    public function doctorcanceled($id)
    {
        $data=appointment::find($id);

        $data->status='Canceled';

        $data->save();

        return redirect()->back();

    }

    public function prescription(Request $request)

    {
    $data = new Prescription;
    $data->name=$request->name;
    $data->dname=$request->dname;
    $data->email=$request->email;
    $data->age=$request->age;
    $data->idNo=$request->idNo;
    $data->Prescription=$request->Prescription;
   

   
    $data->save();

    return redirect()->back()->with('message','Prescrption successfuly sent');

    }
   
    public function create()
    {
        // Fetch the currently logged-in doctor or set appropriate logic
        $doctor = auth()->user(); // or fetch from database as needed
        
        return view('doctor.add_timeslot', compact('doctor'));
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'startTime' => 'required|date_format:H:i',
            'endTime' => 'required|date_format:H:i',
            'tokens' => 'required|integer',
            'details' => 'required|string',
        ]);

        // $userid = Auth::id(); // Get the authenticated user's ID
        $userFirstName = Auth::user()->firstName;
        $userLastName = Auth::user()->lastName;

        $doctor = Doctor::where('firstName', $userFirstName)
                    ->where('lastName', $userLastName)
                    ->first();

        if (!$doctor) {
            return redirect()->back()->with('error', 'Doctor profile not found.');
        }
        // Create a new timeslot record
        DoctorTimeslot::create([
            'date' => $validatedData['date'],
            'start_time' => $validatedData['startTime'],
            'end_time' => $validatedData['endTime'],
            'no_of_tokens' => $validatedData['tokens'],
            'details' => $validatedData['details'],
            // 'doctor_id' => $userid, // Assign the doctor's ID
            'available_token' => $validatedData['tokens'],
            'doctor_id' => $doctor->id,
        ]);

        return redirect()->route('doctor.add_timeslot')->with('success', 'Timeslot added successfully!');
    }

//     public function createTimeslot()
// {
//     $doctors = Doctor::all(); // Get all doctors from the Doctor model
//     return view('doctor.create_timeslot', compact('doctors'));
// }
public function showManageTimeslots()
{
    if(Auth::id())
      {
        $firstName = Auth::user()->firstName;
        $lastName = Auth::user()->lastName;
        $doctor = Doctor::where('firstName', $firstName)
                        ->where('lastName', $lastName)
                        ->first();

        $doctor_id = $doctor->id;
        
        $timeslots=DoctorTimeslot::where('doctor_id',$doctor_id)->get();

        return view('doctor.add_timeslot',compact('timeslots'));
      }

     else
        {
            return redirect()->back();
        }
}

public function approveAppointment($id)
{
    $appointment = Appointment::find($id);

    if ($appointment) {
        // Update the appointment status to 'approved'
        $appointment->status = 'approved';
        $appointment->save();

        // Send email to the user
        Mail::to($appointment->email)->send(new AppointmentApproved($appointment));

        return redirect()->back()->with('message', 'Appointment approved and email sent.');
    }

    return redirect()->back()->with('error', 'Appointment not found.');
}

}

