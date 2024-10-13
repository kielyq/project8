<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="basis-1/2 flex flex-row bg-black">
<img src="img/11.jpg" alt="logo" class="size-20 m-8 rounded-lg">
<p class="text-center text-blue-600 tracking-wide subpixel-antialiased font-medium text-5xl m-8">Нарушений.нет</p>
 </header>
    <main>
    @yield('content')
    </main>
    <footer class="bg-gray-500">
 <p class="fixed bottom-0 left-0 text-center text-blue-600 tracking-wide subpixel-antialiased font-medium text-3xl m-16">
 © Урунбаева К. В. 2024
    </p>
 </footer>
</body>
</html>
