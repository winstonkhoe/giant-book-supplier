@extends('templates.home')
@section('title', 'Home')
@section('content')
    <section id="popular" class="flex flex-col w-100 px-12">
        <h1 class="text-3xl font-bold my-8">Available Books</h1>
        <div class="grid grid-cols-7 overflow-hidden overflow-x-auto gap-6 gap-y-10">
            @foreach ($books as $book)
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
    </section>
@endsection
