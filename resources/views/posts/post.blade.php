        <div class="blog-post">
            <a href="posts/{{ $post->id }}">
            <h2 class="blog-post-title">{{ $post->title}}</h2>
            </a>
            <p class="blog-post-meta">{{ $post->user->name }} on {{ $post->created_at->toFormattedDateString()}}
            @foreach ($post->tags as $tag)
            	<a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a>
            @endforeach
            </p>
            {{ $post->body }}
          </div><!-- /.blog-post -->