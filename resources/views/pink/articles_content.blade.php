
<div id="content-blog" class="content group">
 @if($articles)

    @foreach($articles as $article)

        <div class="sticky hentry hentry-post blog-big group">
        <!-- post featured & title -->
        <div class="thumbnail">
            <!-- post title -->
            <h2 class="post-title"><a href="{{ route('articles.show',['alias'=>$article->alias]) }}">{{ $article->title }}</a></h2>
            <!-- post featured -->
            <div class="image-wrap">
                <img src="{{ asset(env('THEME')) }}/images/articles/{{ $article->img->max }}" alt="001" title="001" />        
            </div>
            <p class="date">
                <span class="month">{{ $article->created_at->format('M') }}</span>
                <span class="day">{{ $article->created_at->format('d') }}</span>
            </p>
        </div>
        <!-- post meta -->
        <div class="meta group">
            <p class="author"><span>by <a href="#" title="Posts by {{ $article->user->name }}" rel="author">{{ $article->user->name }}</a></span></p>
            <p class="categories">
                <span>In: 
                    <a href="{{ route('articlesCat',['cat_alias'=>$article->category->alias]) }}" 
                        title="View all posts in {{ $article->category->title }}" rel="category tag">
                        {{ $article->category->title }}
                    </a>
                </span></p>
            <p class="comments"><span><a href="{{ route('articlesCat',['cat_alias'=>$article->category->alias]) }}#respond" title="Comment on Section shortcodes &amp; sticky posts!">
                {{ count($article->comments) ? count($article->comments) : '0'}}
                 {{ Lang::choice('ru.comments',count($article->comments)) }}
            </a></span></p>
        </div>
        <!-- post content -->
        <div class="the-content group">
            <p>Fusce nec accumsan eros. Aenean ac orci a magna vestibulum posuere quis nec nisi. Maecenas rutrum vehicula condimentum. Donec volutpat nisl ac mauris consectetur gravida.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel vulputate nibh. Pellentesque habitant <strong>morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas.</p>
            <p>In facilisis ornare arcu, sodales facilisis neque blandit ac. Ut blandit ipsum quis arcu adipiscing <strong>sit amet semper</strong> sem feugiat. Nam sed dapibus arcu. Nullam eleifend molestie lectus. Nullam nec risus purus.</p>
            <p><a href="{{ route('articlesCat',['cat_alias'=>$article->alias]) }}" class="btn   btn-beetle-bus-goes-jamba-juice-4 btn-more-link">→ Read more</a></p>
        </div>
        <div class="clear"></div>
    </div>

    @endforeach   

    
    <div class="general-pagination group"><a href="#" class="selected">1</a><a href="#">2</a><a href="#">&rsaquo;</a></div>
@endif   
</div>
