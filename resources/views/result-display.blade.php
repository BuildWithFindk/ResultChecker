<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet - Digital Khutrukya</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-4 md:p-10">
    
    <div class="max-w-4xl mx-auto bg-white p-8 shadow-xl border-t-8 border-[#e31837]">
        <div class="text-center mb-10">
            <h1 class="text-2xl font-bold uppercase text-gray-800">Government of Nepal</h1>
            <h2 class="text-xl font-semibold text-gray-700">National Examination Board (NEB)</h2>
            <p class="text-gray-500 italic">Sanothimi, Bhaktapur, Nepal</p>
            <div class="mt-4 inline-block bg-red-100 text-red-700 px-4 py-1 rounded-full font-bold uppercase tracking-widest text-sm">
                Grade Sheet
            </div>
        </div>

        <!-- Student Information Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 border-b pb-6">
            <div class="space-y-2">
                <p><span class="text-gray-500 font-medium">Name:</span> <span class="font-bold uppercase">Student Name</span></p>
                <p><span class="text-gray-500 font-medium">Symbol No:</span> <span class="font-bold">{{ $symbol }}</span></p>
            </div>
            <div class="space-y-2 md:text-right">
                <p><span class="text-gray-500 font-medium">Date of Birth:</span> <span class="font-bold">{{ $dob }}</span></p>
                <p><span class="text-gray-500 font-medium">Registration No:</span> <span class="font-bold">79XXXXXXXX</span></p>
            </div>
        </div>

        <!-- Marksheet Table -->
        <table class="w-full border-collapse border border-gray-300 mb-8 text-sm md:text-base">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 p-3 text-left">Subject Code</th>
                    <th class="border border-gray-300 p-3 text-left">Subject Name</th>
                    <th class="border border-gray-300 p-3 text-center">Grade</th>
                    <th class="border border-gray-300 p-3 text-center">Grade Point</th>
                </tr>
            </thead>
            <tbody>
                <tr><td class="border p-3">ENG. 001</td><td class="border p-3">Compulsory English</td><td class="border p-3 text-center font-bold">A</td><td class="border p-3 text-center">3.6</td></tr>
                <tr><td class="border p-3">NEP. 002</td><td class="border p-3">Compulsory Nepali</td><td class="border p-3 text-center font-bold">B+</td><td class="border p-3 text-center">3.2</td></tr>
                <tr><td class="border p-3">MAT. 003</td><td class="border p-3">Mathematics</td><td class="border p-3 text-center font-bold">A+</td><td class="border p-3 text-center">4.0</td></tr>
            </tbody>
        </table>

        <!-- Final GPA Display -->
        <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg border border-gray-200">
            <span class="text-lg font-semibold text-gray-700 uppercase">Grade Point Average (GPA)</span>
            <span class="text-3xl font-black text-green-600">3.60</span>
        </div>

        <!-- Action Buttons -->
        <div class="mt-12 flex flex-col md:flex-row justify-between items-center gap-4">
            <a href="/" class="text-gray-600 hover:text-red-600 transition font-medium flex items-center">
                ← Check Another Result
            </a>
            <div class="space-x-4">
                <button onclick="window.print()" class="bg-gray-800 text-white px-6 py-2 rounded shadow hover:bg-black transition">
                    Print / Save PDF
                </button>
                <button class="bg-[#e31837] text-white px-6 py-2 rounded shadow hover:bg-red-800 transition">
                    Share on Digital Khutrukya
                </button>
            </div>
        </div>
    </div>
</body>
</html>