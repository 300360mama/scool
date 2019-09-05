@extends('blocks.layouts')
@extends('blocks.header')
@extends('blocks.footer')
@extends('blocks.sidebar')
@include('blocks.like_article')

@section('content')
<main>

    @foreach($articles as $article)

        <article>

            <h3 class="title">{{ $article->title_article }}</h3>
            <span class="article_date">{{ $article->created_at }}</span>
            <img src="./image/content/article-img.jpg" alt="logo-article" class="article_logo">
            <span class="article_text">
                {{ $article->content_article }}
            </span>

            <a href="#" class="continue_read">Продовжити читання
                <span class="fa fa-arrow-right"></span>
            </a>
        </article>
    @endforeach


    @yield('like_article')

</main>

@endsection
