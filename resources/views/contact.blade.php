@extends('templates.home')

@section('title', 'Home')

@section('content')
    <section id="popular" class="flex flex-col w-100 px-12">
        <div class="flex flex-col my-8">
            <h1 class="text-3xl font-bold my-8">Contact</h1>
            <h2 class="text-xl font-bold">Store Address</h2>
            <p class="text-base font-bold">Jalan Pembangunan Baru Raya<br>Kompleks Pertokoan Emerald Blok III/12<br>Bintaro, Tangerang Selatan<br>Indonesia</p>
        </div>
        <div class="flex flex-col my-8">
            <h2 class="text-xl font-bold">Open Daily</h2>
            <p class="text-base font-bold">08:00 - 20:00</p>
        </div>
        <div class="flex flex-col my-8">
            <h2 class="text-xl font-bold">Contact</h2>
            <p class="text-base font-bold">Phone: 021-08899776655</p>
            <p class="text-base font-bold">Email: winston@uts.com</p>
        </div>
    </section>
@endsection
