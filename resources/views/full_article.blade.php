@extends('blocks.layouts')
@extends('blocks.header')
@extends('blocks.footer')
@extends('blocks.sidebar')

@include('blocks.like_article')
@include('blocks.comments')


@section('content')
<main>
    <article>
    
        <h3 class="title">Full article</h3>
        <span class="article_category">Lifestyle</span>
        <span class="article_date">November 16, 2015</span>
        <img src="./image/content/article-img.jpg" alt="logo-article" class="article_logo">
        <span class="article_text">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
            quis nostrud exerci tation ullamcorper suscipit lobortis nisl 
            ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
            dolor in hendrerit in vulputate velit esse molestie consequat, 
            vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan 
            et iusto odio dignissim qui blandit praesent luptatum zzril delenit
            augue duis dolore te feugait nulla facilisi. Nam liber tempor cum 
            soluta nobis eleifend option congue nihil imperdiet doming id 
            quod mazim placerat facer possim assum. 

            Typi non habent claritatem insitam; est usus legentis in iis qui 
            facit eorum claritatem. Investigationes demonstraverunt lectores 
            legere me lius quod ii legunt saepius. Claritas est etiam processus 
            dynamicus, qui sequitur mutationem consuetudium lectorum. 
            Mirum est notare quam littera gothica, quam nunc putamus parum 
            claram, anteposuerit litterarum formas humanitatis per seacula 
            quarta decima et quinta decima. Eodem modo typi, qui nunc nobis
             videntur parum clari, fiant sollemnes in futurum.

            Duis autem vel eum iriure dolor in hendrerit in vulputate velit
            esse molestie consequat, vel illum dolore eu feugiat nulla 
            facilisis at vero eros et accumsan et iusto odio dignissim qui 
            blandit praesent luptatum zzril delenit augue duis dolore te feugait 
            nulla facilisi. Nam liber tempor cum soluta nobis eleifend option 
            congue nihil imperdiet doming id quod mazim placerat facer possim assum. 
             
            Claritas est etiam processus dynamicus, qui sequitur mutationem 
            consuetudium lectorum. Mirum est notare quam littera gothica, 
            quam nunc putamus parum claram, anteposuerit litterarum formas 
            humanitatis per seacula quarta decima et quinta decima. 
            Eodem modo typi, qui nunc nobis videntur parum clari, 
            fiant sollemnes in futurum.
        </span>

    </article>


    
    @yield('comments')
    @yield('like_article')
   

</main>

@endsection


