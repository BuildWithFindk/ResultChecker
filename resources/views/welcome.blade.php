<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEE Results - Digital Khutrukya</title>
    <!-- Vite directive to load Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gray-50 flex flex-col items-center justify-center p-4">

    <!-- Flash Message for temporary testing -->
    @if(session('info'))
        <div class="mb-4 bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative">
            {{ session('info') }}
        </div>
    @endif

    <!-- Main Results Card -->
    <div class="bg-white p-8 rounded-lg shadow-md w-full border border-gray-200" style="max-width: 600px;">
        <h1 class="text-3xl font-bold text-center mb-6">SEE Results 2082/83</h1>
        
        <p class="text-center text-gray-700 mb-8 text-lg">
            Provide your details to get your results on 
            <a href="#" class="text-blue-600 hover:underline">Digital Khutrukya</a>
        </p>

        <form action="{{ route('fetch.result') }}" method="POST">
            @csrf
            <div class="flex items-center space-x-4 mb-8">
                <label for="symbol_number" class="font-semibold text-gray-800 text-lg whitespace-nowrap w-1/4">
                    Symbol<br>Number
                </label>
                <input type="text" 
                       id="symbol_number" 
                       name="symbol_number" 
                       placeholder="Please enter your SEE Symbol Number" 
                       class="w-3/4 border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-red-600"
                       required>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-[#e31837] hover:bg-red-700 text-white font-medium py-2 px-8 rounded transition">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <!-- Partner / Supported By Section -->
    <div class="mt-10 text-center flex flex-col items-center">
        <div class="flex items-center justify-center space-x-6 mb-4">
            <!-- Replace src with your actual logo paths later -->
            <div class="text-[#e31837] font-extrabold text-3xl tracking-tighter">Digital Khutrukya</div>
            <img src="/images/sparrow-logo.png" alt="Sparrow SMS" class="h-10" onerror="this.style.display='none'">
        </div>
        
        <p class="text-[#e31837] font-bold text-lg mb-2">Supported by</p>
        <div class="text-[#8b0000] text-lg leading-tight">
            <p>Digital Khutrukya</p>
            <p>Sparrow SMS</p>
        </div>
    </div>

    <!-- Bottom Banner Placeholder -->
    <div class="mt-12 w-full max-w-3xl">
        <img src="/images/scholarship-banner.png" alt="100% Scholarship Banner" class="w-full rounded shadow-sm" onerror="this.style.display='none'">
    </div>

</body>
</html>