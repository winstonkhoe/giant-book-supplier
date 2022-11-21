@extends('templates.home')

@section('title', 'Detail Book')

@section('content')
    <section id="popular" class="flex flex-col w-100 px-12">
        <h1 class="text-3xl font-bold my-8">Detail Book</h1>
        <div class="grid grid-cols-2 overflow-hidden overflow-x-auto gap-6">
            <div>
                <img src="{{$book->image}}" alt="">
            </div>
            <div class="flex h-full items-start justify-center">
                <div class="flex flex-col">
                    <h3 class="text-xl">Title: {{$book->title}}</h3>
                    <h3 class="text-xl">Author: {{$book->author}}</h3>
                    <h3 class="text-xl">Year: {{$book->year}}</h3>
                    <h3 class="text-xl">Publisher: {{$book->publisher->name}}</h3>
                    <h3 class="text-xl">Synopsis:<br>{{$book->synopsis}}</h3>
                </div>
            </div>
        </div>
    </section>
@endsection
