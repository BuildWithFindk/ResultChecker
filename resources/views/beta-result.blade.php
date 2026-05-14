<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beta Preview - Digital Khutrukya</title>
    @vite('resources/css/app.css')
    <style>
        .glass-morphism {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .animate-pulse-slow {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
</head>
<body class="min-h-screen bg-slate-50 flex flex-col items-center justify-center p-6 font-sans">

    <!-- Beta Alert Header -->
    <div class="w-full max-w-2xl mb-8">
        <div class="bg-blue-600 text-white px-6 py-3 rounded-t-xl font-bold flex justify-between items-center shadow-lg">
            <span>✨ DIGITAL KHUTRUKYA BETA</span>
            <span class="bg-blue-400 text-xs px-2 py-1 rounded">v1.0.2-dev</span>
        </div>
        <div class="bg-blue-50 border-x border-b border-blue-200 p-4 rounded-b-xl text-blue-800 text-sm flex items-center">
            <svg class="w-5 h-5 mr-3 animate-spin" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Official API connection is pending. You are viewing the **Preview Mode**.
        </div>
    </div>

    <!-- Main Preview Content -->
    <div class="glass-morphism border border-gray-200 p-10 rounded-2xl shadow-2xl w-full max-w-2xl relative overflow-hidden">
        
        <!-- Watermark -->
        <div class="absolute -right-10 -top-10 text-gray-100 font-black text-9xl transform rotate-12 select-none pointer-events-none">
            BETA
        </div>

        <div class="relative z-10 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Almost There! 🚀</h2>
            <p class="text-gray-500 mb-8">We've received your request for <strong>Symbol: {{ $symbol }}</strong></p>

            <!-- Feature Teaser -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8 text-left">
                <div class="bg-white border border-gray-100 p-4 rounded-xl shadow-sm">
                    <span class="text-2xl">📊</span>
                    <h3 class="font-bold text-gray-800 mt-2">Smart Analysis</h3>
                    <p class="text-xs text-gray-500">See subject-wise strength and weak points instantly.</p>
                </div>
                <div class="bg-white border border-gray-100 p-4 rounded-xl shadow-sm">
                    <span class="text-2xl">🔒</span>
                    <h3 class="font-bold text-gray-800 mt-2">Digital Vault</h3>
                    <p class="text-xs text-gray-500">Securely store your marksheet in your Digital Khutrukya.</p>
                </div>
            </div>

            <!-- Waitlist/Coming Soon Button -->
            <button disabled class="w-full bg-gray-200 text-gray-500 font-bold py-4 rounded-xl cursor-not-allowed mb-4">
                MARK SHEET NOT RELEASED YET
            </button>
            
            <a href="/" class="text-sm text-red-600 font-bold hover:underline">
                ← Go back to search screen
            </a>
        </div>
    </div>

    <!-- Footer Footer -->
    <div class="mt-10 text-center opacity-50">
        <p class="text-sm font-medium">Digital Khutrukya Engine v2026.05</p>
        <p class="text-xs">Proudly developed for Nepalese Students</p>
    </div>

</body>
</html>