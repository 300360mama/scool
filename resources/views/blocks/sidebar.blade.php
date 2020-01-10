@section('sidebar')
<aside id="sidebar">

    <i class="fas fa-list-ul"></i>
    <section class="aside_section categories">
        <span class="aside_title">Шкільні предмети</span>
        <div id="categoriesList" class="categories_list">
            @foreach ($subcategories as $subcategory)
             <a href="/scool/subcategory/{{ $subcategory->id }}" class="category">{{ $subcategory->name }}</a>
            @endforeach
        </div>
        <i id="openArrow" class="open_block fa-angle-double-down fa"></i>
    </section>

   
    <section class="latest_post aside_section">
        <span class="aside_title">Latest Post</span>
        <div class="latest_post_list">
           @foreach($latest_post as $article)
            <a href="/scool/{{ $article->category->name }}/{{ $article->id }}" class="latest_post_block">
                <img src="/scool/image/sidebar/image1.png" alt="" class="post_id_logo">
                <div class="post_id">
                    <span class="post_id_text">{{ $article->title_article }}</span>
                <span class="post_id_date">{{ $article->created_at->format("d-M-Y") }} </span>
                </div>
            </a>
            
           @endforeach

        </div>
    </section>
   
</aside>
@endsection