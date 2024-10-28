<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home_styles.css">
</head>
<body>
<header class="header">
<img src="img/11.jpg" alt="logo" class="logo">
<div class="header-links">
   <a href="/" class="link-head"> 
    <p class="text-h">
        Главная
    </p>
    </a>
    <a href="/array" class="link-head"> 
    <p class="text-h">
        Массивы
    </p>
    </a>
</div>
 </header>
<main class="main">
    <div class="card-container">
    @foreach ($array as $arr)
        <div class="card">
        <img src="{{$arr->path}}" alt="bed" class="card-img">
            <div class="card-text">
                <p class="title-card">
                {{$arr->title}}
                </p>
                <p class="price-card">
                {{$arr->price}}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</main>
 <footer class="footer">
 <p class="text-f">
 © Урунбаева К. В. 2024
    </p>
 </footer>

</body>
</html>