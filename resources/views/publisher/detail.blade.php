@extends('templates.home')
@section('title', 'Publisher')
@section('content')
    <section id="popular" class="flex flex-col w-100 px-12 mt-8">
        <div class="flex flex-col items-center gap-[1rem] w-full">
            <div class="flex gap-[2rem] rounded-lg drop-shadow-lg border-2 bg-white border-gray-600 p-5">
                <img class="h-[8rem] w-[8rem] object-cover" src="{{ $publisher->image }}" alt="">
                <div class="flex flex-col">
                    <h1 class="text-3xl font-bold">{{ $publisher->name }}</h1>
                    <h3 class="text-lg font-bold">Address: {{ $publisher->address }}</h3>
                    <h3 class="text-lg font-bold">Phone: {{ $publisher->phone }}</h3>
                    <h3 class="text-lg font-bold">Email: {{ $publisher->email }}</h3>
                </div>
            </div>

            <div class="grid grid-cols-6 overflow-hidden overflow-x-auto gap-6 my-8">
                @foreach ($publisher->books as $book)
                    <div
                        class="flex flex-col flex-auto grow-0 h-[27rem] rounded-lg overflow-hidden border-2 border-[#000]/10 shadow-lg">
                        <div class="h-full w-full rounded-t-lg overflow-hidden">
                            <img class="h-full w-full object-cover transition-all duration-500 hover:scale-[1.1]"
                                src="{{ $book->image }}" alt="" srcset="">
                        </div>
                        <div class="flex flex-col p-3">
                            <h6 class="text-xl font-bold">{{ $book->title }}</h6>
                            <p class="text-base">{{ $book->author }}</p>
                            <div class="flex justify-center items-center w-full">
                                <a class="mt-4 py-[.5rem] px-[1.2rem] bg-[#fe641e]/80 hover:bg-[#fe641e] transition-all rounded-lg text-white text-sm font-bold"
                                    href="{{ route('book', $book) }}">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
