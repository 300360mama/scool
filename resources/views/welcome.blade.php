<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <nav class="nav-menu">
            <a href="#">Головна</a>
            <a href="#">Предмети</a>
            <a href="#">Цікавинки</a>
            <a href="#">Дошкільнятам</a>
            <a href="#">Розвиваючі ігри</a>
        </nav>
        <form class="search-form" action="" method="post">
            <input type="text" class="search" placeholder="Search">
        </form>
    </header>

    <div class="wrapper">
        <main id="main"></main>
        <aside id="aside">
            <h3 class="category-title">Категорії</h3>
            <ul class="category-container">
                <li><a href="" class="category-name">Travel</a></li>
                <li><a href="" class="category-name">Musik</a></li>
                <li><a href="" class="category-name">Game</a></li>
                <li><a href="" class="category-name">Language</a></li>
            </ul>
        </aside>
    </div>
    <footer>
        <span class="copyright">Copyright 2019 </span> </footer>
</body>

</html>