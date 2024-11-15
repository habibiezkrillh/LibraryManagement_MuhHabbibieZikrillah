<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <!-- Include your CSS or TailwindCSS here -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <header class="bg-blue-600 text-white p-4">
        <h1 class="text-2xl">Library Management System</h1>
    </header>

    <main class="py-8">
        @yield('content') <!-- This will load the content from the individual pages like dashboard -->
    </main>

</body>
</html>
