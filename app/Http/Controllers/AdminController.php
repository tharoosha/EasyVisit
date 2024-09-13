<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\User;

use App\Models\Appointment;

use App\Models\LabAssistant;

use App\Models\Pharmacist;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }
    public function dashboard()
    {
     
        $doctorCount = Doctor::count(); 
        $appointmentCount = Appointment::count();
        $labStaffCount = LabAssistant::count();
        $pharmacyStaffCount = Pharmacist::count();
        return view('admin.dashboard', compact('doctorCount','appointmentCount', 'labStaffCount', 'pharmacyStaffCount'));
    }
 
    public function upload(Request $request)
    {
        try {
            // Validate incoming request
            $request->validate([
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'telephoneNumber' => 'required|string|max:20',
                'address' => 'required|string|max:20',
                'specialization' => 'required|string|max:255',
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max size and allowed file types as needed
            ]);
            $user = new User();
            $user->usertype = '2'; 
            $user->firstName = $request->input('firstName');
            $user->lastName = $request->input('lastName');
            $user->email = $request->input('email');
            $user->telephoneNumber = $request->input('telephoneNumber');
            $user->address = $request->input('address');
            $user->password = Hash::make($request->password); // Set a default password, you may adjust this according to your requirements
            $user->save();
            // Upload and save doctor image
            $image = $request->file('file');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('doctorimage', $imageName);
    
            // Create a new doctor record
            $doctor = new Doctor();
            $doctor->firstName = $request->input('firstName');
            $doctor->lastName = $request->input('lastName');
            $doctor->phone = $request->input('telephoneNumber');
            $doctor->specialization = $request->input('specialization');
            $doctor->image = $imageName;
            $doctor->save();
    
            return redirect()->back()->with('message', 'Doctor Details Added Successfully');
        } catch (\Exception $e) {
            // Log any exceptions for further investigation
            \Log::error($e);
    
            // Redirect back with error message
            return redirect()->back()->withErrors(['error' => 'Failed to add doctor']);
        }
    }
    

    public function showappointment()
    {

        $data=appointment::all();


        return view('admin.showappointment',compact('data'));
    }

    public function approved($id)
    {
        $data=appointment::find($id);

        $data->status='approved';

        $data->save();

        return redirect()->back();

    }

    public function canceled($id)
    {
        $data=appointment::find($id);

        $data->status='Canceled';

        $data->save();

        return redirect()->back();

    }

    public function showdoctor()
    {
        $data = doctor::all();
        return view('admin.showdoctor',compact('data'));
    }

    public function getDoctors(Request $request) {
        $specialization = $request->get('specialization');
        $date = $request->get('date');
        
        // Fetch doctors who have available time slots on the selected date
        $doctors = Doctor::where('specialization', $specialization)
            ->whereHas('timeSlots', function($query) use ($date) {
                $query->where('date', $date)
                      ->where('no_of_tokens', '>', 0); // Only doctors with available tokens
            })
            ->get();
        
        return response()->json($doctors);
    }
    

    public function deletedoctor($id)
    {
        $data = doctor::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data = doctor::find($id);
        return view('admin.updatedoctor',compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor = doctor::find($id);

        $doctor->firstName=$request->firstName;

        $doctor->lastName=$request->lastName;

        $doctor->phone=$request->telephoneNumber;

        $doctor->specialization=$request->specialization;

        $image=$request->file;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;

        }

        $doctor->save();

        return redirect()->back()->with('message','Doctor details updated successfully');
    }

    public function addlabassistant()
    {
        return view('admin.add_labassistant');
    }
    public function uploadlab1(Request $request)
    {
        $lab = new LabAssistant;
        $lab->firstname=$request->firstname;
        $lab->lastname=$request->lastname;
        $lab->phone=$request->phone;

        $lab->save();

        return redirect()->back()->with('message','Lab Assistant details updated successfully');
    }
    public function uploadlab(Request $request)
    {
        try {
            // Validate incoming request
            $request->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255', // Corrected typo
                'phone' => 'required|string|max:20',
                'address' => 'required|string|max:255', // Increased max size, adjust as needed
                'email' => 'required|email|unique:users,email', // Added email validation
                'password' => 'required|string|min:6', // Assuming password field is required
                // Add more validation rules if needed
            ]);
    
            // Create a new user
            $user = new User();
            $user->usertype = '4'; 
            $user->firstName = $request->input('firstname');
            $user->lastName = $request->input('lastname');
            $user->email = $request->input('email');
            $user->telephoneNumber = $request->input('phone');
            $user->address = $request->input('address');
            $user->password = Hash::make($request->input('password'));
            $user->save();
    
            $lab = new LabAssistant;
            $lab->firstname=$request->firstname;
            $lab->lastname=$request->lastname;
            $lab->phone=$request->phone;

            $lab->save();

      

        return redirect()->back()->with('message', 'Lab Assistant details updated successfully');
    } catch (\Exception $e) {
        // Log any exceptions for further investigation
        \Log::error($e);

        // Redirect back with error message
        return redirect()->back()->withErrors(['error' => 'Failed to add Lab Assistant']);
    }
    }


    public function addpharmacist()
    {
        return view('admin.add_pharmacist');
    }
    

    public function uploadpharmacist(Request $request)
    {
        try {
            // Validate incoming request
            $request->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255', // Corrected typo
                'phone' => 'required|string|max:20',
                'address' => 'required|string|max:255', // Increased max size, adjust as needed
                'email' => 'required|email|unique:users,email', // Added email validation
                'password' => 'required|string|min:6', // Assuming password field is required
                // Add more validation rules if needed
            ]);
    
            // Create a new user
            $user = new User();
            $user->usertype = '3'; 
            $user->firstName = $request->input('firstname');
            $user->lastName = $request->input('lastname');
            $user->email = $request->input('email');
            $user->telephoneNumber = $request->input('phone');
            $user->address = $request->input('address');
            $user->password = Hash::make($request->input('password'));
            $user->save();
    
            // Create a new pharmacist
            $pharmacist = new Pharmacist(); // Assuming 'Pharmacist' is the correct class name
            $pharmacist->firstname = $request->input('firstname');
            $pharmacist->lastname = $request->input('lastname');
            $pharmacist->phone = $request->input('phone');
            // Populate other fields of pharmacist as needed
            $pharmacist->save();
    
            return redirect()->back()->with('message', 'Pharmacist details updated successfully');
        } catch (\Exception $e) {
            // Log any exceptions for further investigation
            \Log::error($e);
    
            // Redirect back with error message
            return redirect()->back()->withErrors(['error' => 'Failed to add pharmacist']);
        }
    }
    
    

    public function doctor()
    {
        $doctor = Doctor::all(); // Assuming Doctor is your model
        return view('user.doctor', ['doctor' => $doctor]);
    }
     
}
