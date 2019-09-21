@extends('blocks.layouts')
@extends('blocks.header')
@extends('blocks.footer')
@extends('blocks.sidebar')
@include('blocks.like_article')
@include('blocks.comments')


@section('content')
<main>
    <article>
        <h3 class="title">{{ $article->title_article }}</h3>
        <span class="article_date">{{ $article->created_at }}</span>
        <img src="./image/content/article-img.jpg" alt="logo-article" class="article_logo">
        <span class="article_text">
                {{ $article->content_article }}
        </span>


    </article>


    
    @yield('comments')
    @yield('like_article')
   

</main>

@endsection


