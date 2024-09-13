<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Labappointment;


class LabController extends Controller
{
    public function labhome()
    {
        return view('lab.labhome');
    }
   
    public function labappointment()
    {
        $labappointments = Labappointment::all(); // Assuming Lab is your model
        return view('lab.labappointment', ['labappointments' => $labappointments]);
    }
    public function labapproved($id)
    {
        $data=labappointment::find($id);

        $data->status='approved';

        $data->save();

        return redirect()->back();

    }

    public function labcanceled($id)
    {
        $data=labappointment::find($id);

        $data->status='Canceled';

        $data->save();

        return redirect()->back();

    }

}
