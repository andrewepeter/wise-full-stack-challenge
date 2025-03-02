<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    
    <div class="min-h-screen flex flex-col items-center justify-center">
        <h1 class="text-3xl font-bold">Dashboard</h1>
        
        <button 
            onclick="document.documentElement.classList.toggle('dark')" 
            class="mt-4 px-4 py-2 bg-blue-500 dark:bg-yellow-500 text-white rounded">
            Toggle Dark Mode
        </button>
        
        <div class="mt-6 p-6 bg-gray-200 dark:bg-gray-800 rounded shadow-md">
            <h2 class="text-2xl mb-4">Job Listings</h2>
            <ul>
                <li class="py-2 border-b border-gray-300 dark:border-gray-700">Job 1 - Company A</li>
                <li class="py-2 border-b border-gray-300 dark:border-gray-700">Job 2 - Company B</li>
                <li class="py-2">Job 3 - Company C</li>
            </ul>
        </div>
    </div>

    <script>
        // Auto-apply dark mode based on user preference
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        }
    </script>

</body>
</html>
