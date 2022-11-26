@extends('templates.home')
@section('title', 'Publisher')
@section('content')
    <section id="popular" class="w-100 px-12">
        <h1 class="text-3xl font-bold my-8">Publishers</h1>
        <div class="grid grid-cols-3 gap-[2rem] w-100">
            @foreach ($publishers as $publisher)
                <div class="flex flex-col rounded-lg overflow-hidden border-2 border-[#000]/10 shadow-lg hover:shadow-xl">
                    <div class="flex items-center gap-[2rem] my-8">
                        <img class="h-[8rem] w-[8rem] object-cover" src="{{ $publisher->image }}" alt="">
                        <div class="flex flex-col gap-[1rem]">
                            <h1 class="text-3xl font-bold">{{ $publisher->name }}</h1>
                        </div>
                    </div>
                    <a href="{{ route('publisher.detail', $publisher) }}"
                        class="w-full py-[1rem] bg-[#fe641e]/80 hover:bg-[#fe641e] transition-all rounded-b-lg text-center text-white text-lg font-bold">Detail</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
