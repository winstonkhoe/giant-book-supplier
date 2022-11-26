@extends('templates.home')
@section('title', 'Detail Book')
@section('content')
    <section id="popular" class="flex flex-col w-100 px-12">
        <h1 class="text-3xl font-bold my-8">Detail Book</h1>
        <div class="grid grid-cols-2 overflow-hidden overflow-x-auto gap-6">
            <div>
                <img src="{{ $book->image }}" alt="">
            </div>
            <div class="flex h-full items-start justify-center">
                <div class="flex flex-col gap-[1.5rem]">
                    <h3 class="text-xl"><span class="font-bold">Title:</span> {{ $book->title }}</h3>
                    <h3 class="text-xl"><span class="font-bold">Author:</span> {{ $book->author }}</h3>
                    <h3 class="text-xl"><span class="font-bold">Year:</span> {{ $book->year }}</h3>
                    <h3 class="text-xl"><span class="font-bold">Publisher:</span> {{ $book->publisher->name }}</h3>
                    <div class="flex flex-col">
                        <h3 class="text-xl"><span class="font-bold">Category:</span></h3>
                        @foreach ($book->book_categories as $book_category)
                            <p class="text-lg ml-4">{{ $book_category->category->name }}</p>
                        @endforeach
                    </div>
                    <h3 class="text-xl"><span class="font-bold">Synopsis:</span><br>{{ $book->synopsis }}</h3>
                </div>
            </div>
        </div>
    </section>
@endsection
