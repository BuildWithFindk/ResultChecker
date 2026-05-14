<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function fetch(Request $request)
    {
        // 1. Validate the incoming request
        // Ensure the user actually typed something before submitting
        $request->validate([
            'symbol_number' => 'required|string|max:15',
        ]);

        // 2. Capture the inputted symbol number
        $symbol = $request->input('symbol_number');

        // 3. API Placeholder
        // When you secure the official API, your code will look like this:
        /*
        $response = Http::get("https://api.neb.gov.np/v1/results", [
            'symbol' => $symbol
        ]);
        
        if ($response->successful()) {
            return view('result-display', ['data' => $response->json()]);
        }
        */

        // 4. Temporary response for testing your local environment
        return back()->with('info', "System is ready. Awaiting official API integration. (Tested Symbol: {$symbol})");
    }
}