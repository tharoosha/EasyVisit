<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StressLevelController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'stress_level' => 'required|numeric|min:0|max:100',
        ]);

        // Find the user by first name and last name
        $user = User::where('firstName', $request->input('first_name'))
                    ->where('lastName', $request->input('last_name'))
                    ->first();

        if ($user) {
            // Save the stress level
            $user->stress_level = $request->input('stress_level');
            $user->save();

            return response()->json(['message' => 'Stress level updated successfully!']);
        } else {
            return response()->json(['message' => 'User not found.'], 404);
        }
    }
}
