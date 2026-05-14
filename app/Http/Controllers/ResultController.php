<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http; // Uncomment this when you get your official API

class ResultController extends Controller
{
    /**
     * Handle the result fetching logic.
     * Processes Symbol Number and DOB from the two-step form.
     */
    public function fetch(Request $request)
    {
        // 1. Validate both inputs
        // symbol_number: Required for the final submission
        // dob: Must be in YYYY-MM-DD format (10 characters)
        $request->validate([
            'symbol_number' => 'required|string|max:20',
            'dob'           => 'required|string|size:10', 
        ]);

        $symbol = $request->input('symbol_number');
        $dob    = $request->input('dob');

        // 2. API Status Toggle
        // Set this to 'true' only after you integrate the official NEB/NTC API
        $isOfficialApiReady = false; 

        if ($isOfficialApiReady) {
            return $this->getOfficialResult($symbol, $dob);
        }

        // 3. Beta Mode Fallback
        // Redirects to the teaser/preview page you just created
        return view('beta-result', [
            'symbol'  => $symbol,
            'dob'     => $dob,
            'version' => 'v1.0.2-dev',
            'message' => 'Official API connection is pending. Viewing in Preview Mode.'
        ]);
    }

    /**
     * Private function to handle real API data once available.
     */
    private function getOfficialResult($symbol, $dob)
    {
        /* 
        // Example of how the real API call will look:
        $response = Http::get('https://api.neb.gov.np/results', [
            'symbol' => $symbol,
            'dob'    => $dob
        ]);

        if ($response->successful()) {
            return view('result-display', ['data' => $response->json()]);
        }
        */

        // If API is "live" but fails, you can still fallback to Beta
        return view('beta-result', ['symbol' => $symbol, 'dob' => $dob]);
    }
}