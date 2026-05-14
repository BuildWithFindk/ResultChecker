<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEE Results - Digital Khutrukya</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gray-50 flex flex-col items-center justify-center p-4 font-sans">

    <!-- Main Card -->
    <div class="bg-white p-10 rounded-xl shadow-sm w-full border border-gray-100" style="max-width: 650px;">
        <h1 class="text-4xl font-bold text-center mb-4 text-gray-900">SEE Results 2082/83</h1>
        
        <p class="text-center text-gray-600 mb-10 text-lg">
            Provide your details to get your results on 
            <a href="#" class="text-blue-600 hover:underline">Digital Khutrukya</a>
        </p>

        <form action="{{ route('fetch.result') }}" method="POST" id="resultForm">
            @csrf
            
            <!-- STEP 1: Symbol Number -->
            <div id="step-1" class="space-y-6">
                <div class="flex items-center">
                    <label class="text-xl font-bold text-gray-800 w-1/3 leading-tight">Symbol<br>Number</label>
                    <input type="text" id="symbol_input" name="symbol_number" placeholder="Please enter your SEE Symbol Number" 
                           class="w-2/3 border border-gray-300 p-4 rounded-lg text-lg focus:ring-2 focus:ring-red-500 outline-none">
                </div>
                <div class="flex justify-end pt-4">
                    <button type="button" onclick="goToStep2()" class="bg-[#e31837] hover:bg-red-700 text-white font-bold py-3 px-10 rounded-lg text-lg transition">
                        Submit
                    </button>
                </div>
            </div>

            <!-- STEP 2: Date of Birth (Hidden by default) -->
            <div id="step-2" class="hidden space-y-6">
                <div class="flex items-center">
                    <label class="text-xl font-bold text-gray-800 w-1/3 leading-tight">Date of<br>Birth</label>
                    <input type="text" id="dob" name="dob" maxlength="10" placeholder="YYYY-MM-DD" 
                           class="w-2/3 border border-gray-300 p-4 rounded-lg text-lg focus:ring-2 focus:ring-red-500 outline-none">
                </div>
                <div class="flex justify-end pt-4">
                    <button type="submit" class="bg-[#e31837] hover:bg-red-700 text-white font-bold py-3 px-10 rounded-lg text-lg transition">
                        View Result
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Branding Section -->
    <div class="mt-12 text-center">
        <h2 class="text-[#e31837] text-4xl font-black mb-6">Digital Khutrukya</h2>
        <p class="text-red-600 font-bold text-xl mb-2">Supported by</p>
        <div class="text-red-900 text-xl font-medium">
            <p>Digital Khutrukya</p>
            <p>Sparrow SMS</p>
        </div>
    </div>

    <script>
        // Switch from Symbol to DOB
        function goToStep2() {
            const symbol = document.getElementById('symbol_input').value;
            if (symbol.trim() === "") {
                alert("Please enter a Symbol Number first.");
                return;
            }
            document.getElementById('step-1').classList.add('hidden');
            document.getElementById('step-2').classList.remove('hidden');
        }

        // Auto-dash for DOB (YYYY-MM-DD)
        const dobInput = document.getElementById('dob');
        dobInput.addEventListener('input', function (e) {
            let v = e.target.value.replace(/\D/g, '');
            if (v.length > 4 && v.length <= 6) v = v.slice(0, 4) + '-' + v.slice(4);
            else if (v.length > 6) v = v.slice(0, 4) + '-' + v.slice(4, 6) + '-' + v.slice(6, 10);
            e.target.value = v;
        });
    </script>
</body>
</html>