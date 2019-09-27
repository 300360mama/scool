@section('sidebar')
<aside>

    <section class="aside_section categories">
        <span class="aside_title">Шкільні предмети</span>
        <div id="categoriesList" class="categories_list">

            @foreach ($subcategories as $subcategory)
             <a href="/subcategory/{{ $subcategory->name }}" class="category">{{ $subcategory->name }}</a>
            @endforeach

  
        </div>
        <i id="openArrow" class="open_block fa-angle-double-down fa"></i>
    </section>
    <section class="latest_post aside_section">
        <span class="aside_title">Latest Post</span>
        <div class="latest_post_list">
            <div class="latest_post_block">
                <img src="/image/sidebar/image1.png" alt="" class="post_id_logo">
                <div class="post_id">
                    <span class="post_id_text">Moxine Headphone by Andy Meerow</span>
                    <span class="post_id_date">November 16, 2015 </span>
                </div>
            </div>
            <div class="latest_post_block">
                <img src="/image/sidebar/image1.png" alt="" class="post_id_logo">
                <div class="post_id">
                    <span class="post_id_text">Moxine Headphone by Andy Meerow</span>
                    <span class="post_id_date">November 16, 2015 </span>
                </div>
            </div>
            <div class=latest_post_block>
                <img src="/image/sidebar/image1.png" alt="" class="post_id_logo">
                <div class="post_id">
                    <span class="post_id_text">Moxine Headphone by Andy Meerow</span>
                    <span class="post_id_date">November 16, 2015 </span>
                </div>
            </div>
            <div class="latest_post_block">
                <img src="/image/sidebar/image1.png" alt="" class="post_id_logo">
                <div class="post_id">
                    <span class="post_id_text">Moxine Headphone by Andy Meerow</span>
                    <span class="post_id_date">November 16, 2015 </span>
                </div>
            </div>

        </div>
    </section>
   
</aside>
@endsection