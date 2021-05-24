@extends('layouts.site')

@section('title', 'Tag')

@section('content')
    <!-- category -->
    <div class="w-full md:pr-12 mb-12">
        <div class="text-center">
            <div class="text-3xl mb-6">
                Tag:

                <a href="{{ route('tag', $tag->slug) }}">
                    {{ $tag->title }}
                </a>
            </div>
        </div>

        <div class="bg-white shadow-md mb-6 rounded-lg overflow-hidden">
            <div class="px-4 pt-3 pb-4 border-gray-300 bg-white">
                <div id="comments" class="text-sm text-gray-600 tracking-wide">
                    <div class="grid grid-cols-3 gap-4 auto-rows-max">
                        @foreach($tag->posts as $post)
                            @include('blog.post')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ category -->
@endsection
