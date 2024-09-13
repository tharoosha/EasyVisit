<?php

namespace App\Http\Controllers;


use Illuminate\Database\QueryException;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Appointment;

use App\Models\Inquiry;

use App\Models\Labappointment;
use App\Models\DoctorTimeSlot;

use App\Models\LabAssistant;

use App\Models\Pharmacist;

class HomeController extends Controller
{
  
    public function redirect()
    {
        if (Auth::id()) { // Check if user is authenticated
            if (Auth::user()->usertype == '0') {
                $doctor = Doctor::all();
                return view('user.home', compact('doctor'));
            } elseif (Auth::user()->usertype == '1') {
                $appointments = Appointment::all();
                $doctorCount = Doctor::count();
                $labStaffCount = LabAssistant::count();
                $pharmacyStaffCount = Pharmacist::count();
                $appointmentCount = $appointments->count();
            
                // Get appointments per month (for chart)
                $appointmentStats = $appointments->groupBy(function ($date) {
                    return \Carbon\Carbon::parse($date->created_at)->format('F');
                })->map(function ($row) {
                    return $row->count();
                });
            
                return view('admin.dashboard', compact(
                    'doctorCount', 'labStaffCount', 'pharmacyStaffCount', 'appointmentCount', 'appointmentStats'
                ));
                
            } elseif (Auth::user()->usertype == '2') {
                return view('doctor.home');
            }
            elseif (Auth::user()->usertype == '3') {
                return view('pharmacy.home');
            }
            elseif (Auth::user()->usertype == '4') {
                return view('lab.labhome');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
    if(Auth::id())
    {
        return redirect('home');
    }
    else
    {
    
        $doctor = doctor::all();

        return view('user.home',compact('doctor'));
    }
}

public function appointment(Request $request)

{
    $data = new appointment;
    $data->name=$request->name;
    $data->email=$request->email;
    $data->date=$request->date;
    $data->phone=$request->phone;
    $data->message=$request->message;
    
    // Fetch the doctor's name using doctor_id
    $doctor = Doctor::find($request->doctor); // Find the doctor by ID

    if (!$doctor) {
        return redirect()->back()->with('error', 'Doctor not found.');
    }

    // Correctly concatenate the doctor's first name and last name
    $data->doctor = $doctor->firstName;

    $data->time_slot = $request->time_slot;
    $data->status='In progress';

    if(Auth::id())
    {
    $data->user_id=Auth::user()->id;
    }

    // $data->save();

    // Find the selected time slot using doctor_id and time_slot
    $timeSlot = DoctorTimeSlot::where('doctor_id', $request->doctor)
                    ->where('id', $request->time_slot) // Filter by both doctor_id and time_slot_id
                    ->first();

    if ($timeSlot && $timeSlot->available_token > 0) {

        $assigned_token = ($timeSlot->no_of_tokens - $timeSlot->available_token ) +1;
        // Reduce the number of available tokens by 1
        $timeSlot->available_token -= 1;
        $timeSlot->save(); // Save the updated time slot
        $data->assigned_token = $assigned_token;
        $data-> save();
    } else {
        return redirect()->back()->with('error', 'No available tokens for this time slot.');
    }

    return redirect()->back()->with('message','Appointment Request Successful! We wil contact with you soon, Your token number is: '.$assigned_token);

}
    public function myappointment()
    {
    if(Auth::id())
      {
        $userid=Auth::user()->id;

        $appoint=appointment::where('user_id',$userid)->get();

        return view('user.my_appointment',compact('appoint'));
      }

     else
        {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function counselling()
    {
        return view('user.counselling');
    }

    public function about_us()
    {
      return view('user.about_us');
    }

    public function contact_us()
    {
        
      return view('user.contact_us');
    }
    

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'number' => 'required|string',
            'message' => 'required|string',
        ]);

        // Create a new Inquiry model instance
        $inquiry = new Inquiry;
        $inquiry->name = $validatedData['name'];
        $inquiry->email = $validatedData['email'];
        $inquiry->phone = $validatedData['number'];
        $inquiry->message = $validatedData['message'];
        $inquiry->status = 'Pending';

        // Save the data to the database
        $inquiry->save();

        // Redirect the user to a thank you page or do something else
        return redirect()->back()->with('success', 'Your inquiry has been submitted successfully!');
    }

    public function laboratory ()
    {
        
      return view('user.labappointment');
    }
    public function doctor()
    {
        $doctor = Doctor::all(); // Assuming Doctor is your model
        return view('user.doctor', ['doctor' => $doctor]);
    }
     
    public function labappointments(Request $request)

    {   
    $data = new labappointment;
    $data->name=$request->name;
    $data->email=$request->email;
    $data->date=$request->date;
    $data->phone=$request->number;
    $data->message=$request->message;
    $data->reporttype=$request->reporttype;
    $data->status='In progress';

    if(Auth::id())
    {
    $data->user_id=Auth::user()->id;
    }

    $data->save();

    return redirect()->back()->with('message','Lab Appointment Request Successful. We wil contact with you soon');

    } 


   
}
  
    
    


  