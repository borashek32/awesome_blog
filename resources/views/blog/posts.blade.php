@extends('layouts.site')

@section('title', 'Posts')

@section('content')
    <!-- articles -->
    <div class="w-full md:pr-12 mb-12">
        <div class="text-center">
            <div class="text-3xl mb-6">
                Posts
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 auto-rows-max">
            @foreach($posts as $post)


                <div class="bg-white shadow-md mb-6 rounded-lg overflow-hidden">
                    <div class="px-4 pt-3 pb-4 border-b border-gray-300 bg-gray-100">
                        <div class="text-lg font-bold uppercase text-gray-600 tracking-wide">
                            <a href="{{ route('post', $post->slug) }}">
                                {{ $post->title }}
                            </a>
                        </div>
                    </div>

                    <div class="p-4">
                        <p class="tracking-wide text-md text-gray-700">
                            Categories:

                            @foreach($post->categories as $category)
                                <a class="border-l border-b border-gray-300 pl-2" href="{{ route('category', $category->slug) }}">
                                    {{ $category->title }}
                                </a>
                            @endforeach
                        </p>
                    </div>

                    <a href="{{ route('post', $post->slug) }}">
                        <div class="bg-cover bg-center h-56 p-4" style="background-image: url({{ $post->image }})">
                            <div class="flex justify-end">
                                <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <div class="px-4 pt-3 pb-4 border-t border-b border-gray-300 bg-gray-100">
                        <p class="tracking-wide text-sm text-gray-700">
                            Tags:

                            @foreach($post->tags as $tag)
                                <a class="border-l border-gray-300 pl-2" href="{{ route('tag', $tag->slug) }}">
                                    #{{ $tag->title }}
                                </a>
                            @endforeach
                        </p>
                    </div>

                    <div class="flex p-4 border-gray-300 text-gray-700">
                        <div class="flex-1 inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>

                            <p>
                                Comments
                            </p>
                        </div>
                    </div>

                    <div class="px-4 pt-3 pb-4 border-t border-b border-gray-300 bg-gray-100">
                        <div class="text-sm text-gray-600 tracking-wide">
                            {!! Str::limit($post->body) !!}
                        </div>
                    </div>

                    <div class="flex justify-end mt-4 text-xs">
                        <a href="{{ route('post', $post->slug) }}" class="bg-black mr-4 mb-4 text-white no-underline py-2 px-3 rounded">
                            Read all
                        </a>
                    </div>
                </div>



            @endforeach
        </div>
    </div>
    <!--/ articles -->
    {{ $posts->links() }}
@endsection
