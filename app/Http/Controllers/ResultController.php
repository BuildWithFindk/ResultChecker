<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function fetch(Request $request)
    {
        $request->validate([
            'symbol_number' => 'required',
            'dob' => 'required'
        ]);

        // SIMULATION: Check if the API is active or has the data
        $apiSuccess = false; // Set to true if you have a working API

        if ($apiSuccess) {
            // Logic for real data
            $data = [
                'name' => 'ANUPAM CHAUDHARY',
                'symbol' => $request->symbol_number,
                'gpa' => '3.65',
                'status' => 'Passed'
            ];
            return view('result-display', compact('data'));
        } else {
            // SHOW BETA PAGE: Fallback when API is not used
            return view('beta-result', [
                'symbol' => $request->symbol_number,
                'version' => 'Beta 1.0.2',
                'message' => 'The official API is currently offline. Viewing in Beta Mode.'
            ]);
        }
    }
}