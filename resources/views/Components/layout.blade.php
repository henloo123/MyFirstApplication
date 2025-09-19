<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Site | {{ $title ?? 'My Elegant App' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif; /*testing lang*/
            background: #fcf7f6;
            color: #555;
        }
        h1 {
            font-family: 'Playfair Display', serif;
        }
        .nav-item {
            position: relative;
            transition: all 0.3s ease-in-out; /* ambot lang gyud ani intawn */
            font-weight: 500;
        }
        .nav-item::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 100%;
            height: 1px;
            background-color: #d4b2a8;
            transform: scaleX(0);
            transition: transform 0.3s ease-in-out;
        }
        .nav-item:hover::after,
        .nav-item.active::after {
            transform: scaleX(1);
        }
        .nav-item.active {
            color: #d4b2a8;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <nav class="bg-[#fafafa] bg-opacity-70 backdrop-blur-md border-b border-gray-100 shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-8 md:px-16 py-6 flex justify-between items-center">
            <a href="/" class="text-5xl font-extrabold text-[#d4b2a8] tracking-tight">
                <h1>{{$heading}}</h1>
            </a>
            <div class="hidden md:block"> 
                <div class="flex items-center space-x-8 lg:space-x-10"> 
                    <x-nav-link href="/" :active="request()->is('/')" class="nav-item text-gray-500 hover:text-gray-800 active:text-gray-800">Home</x-nav-link> 
                    <x-nav-link href="/jobs" :active="request()->is('jobs')" class="nav-item text-gray-500 hover:text-gray-800 active:text-gray-800">Jobs</x-nav-link> 
                </div> 
            </div>
        </div>
    </nav>
    <main class="container mx-auto mt-20 px-8 md:px-16 flex-grow">
        {{ $slot }}
    </main>
</body>
</html>