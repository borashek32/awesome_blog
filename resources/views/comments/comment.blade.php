<div class="heading text-center rounded-lg font-bold text-2xl m-5 text-gray-800" id="comments">
    Comments
</div>


@foreach($post->comments as $comment)
    <p>{{ $comment->user->name }}</p>
    <p>{{ $comment->body }}</p>
@endforeach

<style>
    body {background:white !important;}
</style>
<form action="{{ route('comment', $post->id) }}" method="POST"
      class="rounded-lg text-gray-800 border border-gray-300 p-4 shadow-lg">
    @csrf
    <input type="hidden" value="{{ $post->id }}" name="post_id">
    <div class="grid grid-rows-3 grid-flow-col">
        @if(auth()->user())
            <div class="row-span-3">
            <h4 class="text-center text-md text-bold">
                {{ auth()->user()->name }}
            </h4>

            <div class="text-xs text-center">
                Registered 20.02.2021
            </div>

            <div class="flex justify-center mt-4 align-items-center">
                <img src="{{ Auth::user()->profile_photo_path }}" width="100" alt="{{ Auth::user()->name }}">
            </div>
        </div>
        @else
            <div class="row-span-3">
                <h4 class="text-center text-md text-bold">
                    Guest
                </h4>

                <div class="text-xs text-center">

                </div>

                <div class="flex justify-center mt-4 align-items-center">
                    <img src="img/logo.png" width="100" alt="logo">
                </div>
            </div>
        @endif

        <div class="row-span-2">
            <textarea name="body" class="description w-full bg-gray-100 p-3 h-40 border border-gray-300 rounded-lg
                outline-none" spellcheck="false" placeholder="Describe everything about this post here"></textarea>
        </div>

        <div class="row-span-1">
            <!-- buttons -->
            <div class="buttons flex mt-2">
                <button class="focus:outline-none modal-close px-2 bg-blue-500 p-2 rounded-lg text-white hover:bg-blue-300">
                    Confirm
                </button>
            </div>
        </div>
    </div>
</form>
