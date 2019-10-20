<li class="mb-12">
    <a href="{{ $post->url }}" class="text-2xl text-blue-500">
        {{ $post->formatted_title }}
    </a>
    <div class="flex items-center">
        <time datetime="{{ $post->publish_date->format(DateTime::ATOM) }}" class="text-xs text-gray-500">
            {{ $post->publish_date->format('F d, Y') }}
        </time>

        @if ($post->tags->count())
            <span class="text-xs text-gray-500">&nbsp; | &nbsp;</span>
        @endif

        @include('posts.partials.tags')
    </div>

    <div class="py-2">
        {!! $post->excerpt !!}
    </div>

</li>
