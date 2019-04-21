<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fontawesome/all.css">
</head>
<body>
<header>
    <nav class="navigation">
        <ul>
            <li class="menu"><a href="#">Головна</a></li>
            <li class="menu"><a href="#">Предмети</a></li>
            <li class="menu"><a href="#">Цікавинки</a></li>
            <li class="menu"><a href="#">Дошкільнятам</a></li>
            <li class="menu"><a href="#">Розвиваючі ігри</a></li>
        </ul>
    </nav>
    <h1 class="logo-text">SCHOOL</h1>
</header>
<div class="wrapper"> 
@yield('content')  
    @yield('sidebar')
 
   
   
</div>
<footer>
    <div class="footer-image">
        <img src="./image/footer/image1.png" alt="">
        <img src="./image/footer/image2.png" alt="">
        <img src="./image/footer/image3.png" alt="">
        <img src="./image/footer/image4.png" alt="">
        <img src="./image/footer/image5.png" alt="">
        <img src="./image/footer/image6.png" alt="">
    </div>
    <div class="opacity-wrapper"></div>
    <span class="footer-copyright">&copy; Copyright <span class="date">2019</span></span>
</footer>
</body>
</html>
