@if($post->tags)

    <ul class="flex flex-wrap">
        @foreach($post->tags->sortBy->name as $tag)

            <li class="text-xs text-blue-500 mr-1">
                <a href="{{ route('posts.tagged', $tag->slug) }}">{{ $tag->name }}</a>
            </li>
        @endforeach

        </ul>

@endif
