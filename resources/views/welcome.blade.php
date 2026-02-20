<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        
            <script src="https://cdn.tailwindcss.com"></script>
        
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    <body class="bg-[#050505] min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-4xl bg-[#111111] border border-[#222222] rounded-lg shadow-2xl transition-all duration-300">
            <div class="flex flex-col items-start gap-4 p-16">
                <div class="space-y-1">
                    <h1 class="text-white text-[1.1rem] font-bold tracking-tight">
                        Sascha Danu Arroyan
                    </h1>
                    <p class="text-[#888888] text-sm">
                        20230140043
                    </p>
                </div>
                
                <button class="mt-4 bg-white text-black px-6 py-2.5 rounded-md text-sm font-semibold hover:bg-gray-200 transition-colors duration-200 shadow-md">
                    Modul Pertemuan 1
                </button>
            </div>
        </div>
    </body>
</html>
