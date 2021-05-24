<!-- footer -->
<footer class="w-full bg-white px-6 border-t">
    <div class="container mx-auto max-w-4xl py-6 flex flex-wrap md:flex-no-wrap justify-between items-center text-sm">
        &copy;2019 Your Company. All rights reserved.
        <div class="pt-4 md:p-0 text-center md:text-right text-xs">
            <a href="/" class="text-black no-underline hover:underline">Home</a>
            <a href="{{ route('categories') }}" class="text-black no-underline hover:underline ml-4">Categories</a>
            <a href="#" class="text-black no-underline hover:underline ml-4">About Us</a>
            <a href="#" class="text-black no-underline hover:underline ml-4">Contact</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-black no-underline hover:underline ml-4">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-black no-underline hover:underline ml-4">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-black no-underline hover:underline ml-4">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</footer>
<!-- /footer -->
