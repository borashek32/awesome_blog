<div class="menu">
    <!-- header -->
    <header class="w-full px-6 bg-white">
        <div class="container mx-auto max-w-4xl md:flex space-between items-center">
            <a href="/" class="block py-6 w-full text-center md:text-left md:w-auto text-gray-dark no-underline flex justify-center items-center">
                <div>
                    <img src="img/logo.png" class="ml-4" width="40px" alt="logo">
                    <p class="text-xs">Awesome blog</p>
                </div>
            </a>
            <div class="w-full mr-60 md:w-auto text-center md:text-right">

            </div>
        </div>
    </header>
    <!-- /header -->

    <!-- nav -->
    <nav class="fixed w-full bg-white md:pt-0 px-6 relative z-20 border-t border-b border-gray-light">
        <div class="container mx-auto max-w-4xl md:flex justify-between items-center text-sm md:text-md md:justify-start">
            <div class="w-full text-center md:text-left py-4 flex flex-wrap justify-center items-stretch md:justify-start md:items-start">
                <a href="/" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-light">
                    Home
                </a>

                <a href="{{ route('posts') }}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-light">
                    All posts
                </a>

                <a href="{{ route('categories') }}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-light">
                    Categories
                </a>

                <a href="#" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-light">
                    About Us
                </a>
                <a href="#" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline border-gray-light">
                    Contact
                </a>

            </div>
            <div class="w-full md:w-1/2 text-right md:text-right" style="margin-right: -300px">
                <!-- extra links -->
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-light">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline md:border-r border-gray-light">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-2 md:pl-0 md:mr-3 md:pr-3 text-gray-700 no-underline border-gray-light">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>
    <!-- /nav -->
</div>
