@extends('layouts.site')

@section('title', 'Categories')

@section('content')
    <div class="antialiased font-sans">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-flow-col grid-cols-3">
                @foreach($categories as $category)
                    @include('categories.category')
                @endforeach
            </div>
        </div>
    </div>
@endsection
