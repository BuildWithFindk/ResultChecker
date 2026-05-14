
# 🎓 Digital Khutrukya - SEE/NEB Result Checker

A Laravel-based utility for students in Nepal to check their 10th (SEE) and 12th (NEB) class results.

## 🛠️ Tech Stack
*   **Backend:** Laravel 11 / PHP 8.5
*   **Frontend:** Tailwind CSS v4 (Vite Integrated)
*   **Hardware:** Optimized for MacBook Pro 2019 (Intel)

---

## 🚀 How to Integrate Official APIs

Once you receive official API documentation from the National Examination Board (NEB) or Nepal Telecom (NTC), follow these steps:

### 1. Store your API Key (Security)
Never hardcode your API keys. Open your `.env` file and add:
```env
NEB_API_KEY=your_secret_key_here
NEB_API_URL=[https://api.neb.gov.np/v1/results](https://api.neb.gov.np/v1/results)
```
---
---
# 2.Update the Backend Logic
Open ```app/Http/Controllers/ResultController.php```.Replace the temporary return message with this code:
```php
// 1. Import the Http facade at the top
use Illuminate\Support\Facades\Http;

// 2. Update the fetch function
public function fetch(Request $request) {
    $symbol = $request->input('symbol_number');

    // Make the actual call to the government server
    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . env('NEB_API_KEY')
    ])->get(env('NEB_API_URL'), [
        'symbol' => $symbol
    ]);

    if ($response->successful()) {
        $resultData = $response->json();
        return view('result-display', ['data' => $resultData]);
    }

    return back()->with('error', 'Unable to fetch results. Please check your symbol number.');
}
```
# 3. Create the Result Display View
Create ```resources/views/result-display.blade.php``` to show the student's name, GPA, and marksheet details once the API returns the data.

# 💻 Local Development Commands
To keep the styles and server running on your Mac:
```bash
# Terminal 1: Run the PHP server
php artisan serve

# Terminal 2: Run Tailwind/Vite compiler
npm run dev
```