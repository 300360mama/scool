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
    

    @yield('header')
    <div class="wrapper">

        <div class="not_found">
        <img class="not_found_img" src="/image/notFound/not-found.png" alt="Not found image">
        <h2 class="not_found_title">404 - PAGE NOT FOUND</h2> 
        <span class="not_found_text">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Sunt quidem vitae perferendis eius, dignissimos cumque asperiores molestiae at animi! 
            Illo consequuntur cum corporis eos quidem odio alias itaque nemo adipisci!
            </span>
            <a class="goto_homepage" href="#">Go to Homepage</a>     
        </div>
      
    </div>

    @yield('footer')
    
</body>

</html>