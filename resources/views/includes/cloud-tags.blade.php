<div class="container mb-6 pl-16 pr-16">
    <div class="text-center text-sm">
        <p class="pr-2">
            @foreach($tags as $tag)
                <a href="{{ route('tag', $tag->slug) }}">
                    #{{ $tag->title }}
                </a>
            @endforeach
        </p>
    </div>
</div>
