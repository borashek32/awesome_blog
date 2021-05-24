<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <title>Blog: @yield('title')</title>

    @yield('styles')
</head>
    <body>
        @include('includes.nav')

        <!-- blog -->
        <div class="w-full bg-white con content">
            <div class="header">
                <!-- header -->
                @include('includes.header')
                <!-- /header -->
                @include('includes.messages-success')
            </div>

            <livewire:categories />

            <div class="container max-w-4xl mx-auto items-start py-8 px-12 md:px-0">
                @include('includes.search')

                <livewire:tags />

                <div class="publications">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- /blog -->

        @include('includes.nice-includes')
        @include('includes.footer')
        @yield('scripts')
        @include('includes.assets.scripts')
    </body>
</html>
