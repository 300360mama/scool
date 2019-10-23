@section('like_article')
<div class="like_article_block">
    <h3 class="like_article_info">You might also like</h3>
    <section class="like_article_list">

        @foreach ($like_articles as $like_article)
        <a href="/{{ $like_article->category->name }}/{{ $like_article->id }}" class="like_article_section">
            <img src="/image/like_article/like_article_icon.png" alt="Author icon">
            <span class="article_category">{{ $like_article->category->name }}</span>
            <span class="like_article_title">{{ $like_article->title_article }}</span>
        </a>

        @endforeach
    
    </section>
    

</div>
@endsection