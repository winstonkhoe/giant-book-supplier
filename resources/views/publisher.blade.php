@extends('templates.home')

@section('title', 'Publisher')

@section('content')
    <section id="popular" class="flex flex-col w-100 px-12">
        @foreach ($publishers as $publisher)
            <div class="flex items-start gap-[2rem] my-8">
                <img class="h-[8rem] w-[8rem] object-cover" src="{{$publisher->image}}" alt="">
                <div class="flex flex-col gap-[1rem]">
                    <h1 class="text-3xl font-bold">Publisher: {{$publisher->name}}</h1>
                    <h3 class="text-lg font-bold">Address: {{$publisher->address}}</h3>
                    <h3 class="text-lg font-bold">Phone: {{$publisher->phone}}</h3>
                    <h3 class="text-lg font-bold">Email: {{$publisher->email}}</h3>
                    <div class="grid grid-cols-6 overflow-hidden overflow-x-auto gap-6 my-8">
                        @foreach ($publisher->books as $book)
                            <a href="{{route('book', $book)}}"
                                class="flex flex-col flex-auto grow-0 h-[25rem] rounded-lg overflow-hidden">
                                <div class="h-full w-full rounded-lg overflow-hidden">
                                    <img class="h-full w-full object-cover transition-all duration-500 hover:scale-[1.1]"
                                        src="{{ $book->image }}" alt="" srcset="">
                                </div>
                                <div class="flex flex-col mt-3">
                                    <h6 class="text-xl">{{$book->title}}</h6>
                                    <p class="text-base">{{$book->author}}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>

        @endforeach
    </section>
@endsection
