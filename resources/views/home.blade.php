@extends('templates.home')

@section('title', 'Home')

@section('content')
    <section id="popular" class="flex flex-col w-100 px-12">
        <h1 class="text-3xl font-bold my-8">Available Books</h1>
        <div class="grid grid-cols-6 overflow-hidden overflow-x-auto gap-6">

            @for ($i = 0; $i < count($books); $i++)
                <a href="{{route('book', $book)}}"
                    class="flex flex-col flex-auto grow-0 h-[25rem] rounded-lg overflow-hidden">
                    <div class="h-full w-full rounded-lg overflow-hidden">
                        <img class="h-full w-full object-cover transition-all duration-500 hover:scale-[1.1]"
                            src="{{ $books[$i]->image }}" alt="" srcset="">
                    </div>
                    <div class="flex flex-col mt-3">
                        <h6 class="text-xl">{{$books[$i]->title}}</h6>
                        <p class="text-base">{{$books[$i]->author}}</p>
                    </div>
                </a>
            @endfor

        </div>
    </section>
@endsection
