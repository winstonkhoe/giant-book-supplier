<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giant Book Supplier | @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="flex flex-col items-center min-h-[100vh] overflow-x-hidden bg-white text-[#a14b1f] pt-16">
        <nav class="flex fixed top-0 left-0 z-1 w-full justify-center items-center shadow-lg shadow-[#fdda9a] bg-white">
            <div class="flex flex-none justify-between items-center text-base font-bold w-[90%] h-[4rem]">
                <a href="{{ route('home') }}" class="text-3xl cursor-pointer">GiantBookSupplier</a>
                <div class="flex justify-around items-center gap-16">
                    <a class="hover:text-[#fe641e]" href="/">Home</a>
                    <button id="dropdownNavbarButton" data-dropdown-toggle="dropdownNavbar"
                        class="flex justify-between items-center py-2 pr-4 pl-3 w-full border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto">Category
                        <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <div id="dropdownNavbar"
                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadowdark:divide-gray-600 shadow-black">
                        <ul class="py-1 text-sm text-[#fe641e]" aria-labelledby="dropdownNavbarButton">
                            @foreach ($categories as $category)
                                <li class="bg-white">
                                    <a href="{{ route('category', $category) }}"
                                        class="block py-2 px-4 hover:bg-black/10">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <a class="hover:text-[#fe641e]" href="{{ route('publisher') }}">Publisher</a>
                    <a class="hover:text-[#fe641e]" href="{{ route('contact') }}">Contact</a>
                </div>
            </div>
        </nav>
        <div class="flex flex-col flex-1 w-screen py-4 mb-8">
            @yield('content')
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    @yield('scripts')
</body>

</html>
