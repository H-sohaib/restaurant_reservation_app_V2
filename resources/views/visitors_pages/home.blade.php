<x-home-layout>
    {{-- <div class="bg-white shadow-md" x-data="{ isOpen: false }">
        <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-2xl hover:text-green-400"
                    href="#">
                    TailFood
                </a>
                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button"
                        class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                        aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div :class="isOpen ? 'flex' : 'hidden'"
                class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                    href="#">Home</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                    href="#">About Us</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                    href="#">Our Menu</a>
                <a class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                    href="#">Gallery</a>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
            </div>
        </nav>
    </div> --}}

    <!-- Main Hero Content -->
    <div class="container px-4 py-32 pt-72 mx-auto bg-center bg-cover max-w-none text-center"
        style="background-image: url('https://cdn.pixabay.com/photo/2016/11/18/14/39/beans-1834984_960_720.jpg')">
        <h1
            class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Welcome To Larainfo Restaurant</span>
        </h1>
        <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta voluptatem ab necessitatibus illo
            praesentium
            culpa excepturi quae commodi quaerat,
        </div>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-auto">
                <a href="{{ route('make_reservation.step_one.create') }}" type="button"
                    class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
                    Make Reservation
                </a>
            </span>
        </div>
    </div>

    <!-- End Main Hero Content -->
    {{-- <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
                class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
              > -->
                        <h3 class="text-xl">OUR STORY
                        </h3>
                        <h2 class="text-4xl text-green-600">Welcome</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nemo incidunt
                            praesentium, ipsum
                            culpa minus eveniet, id nesciunt excepturi sit voluptate repudiandae. Explicabo, incidunt
                            quia.
                            Repellendus mollitia quaerat est voluptas!
                        </p>
                        <div class="relative flex">
                            <a href="#_"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="https://cdn.pixabay.com/photo/2017/08/03/13/30/people-2576336_960_720.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="py-20 bg-gray-50">
        <div class="container items-center max-w-6xl px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0 lg:text-start text-center ">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-2xl font-bold">About Us</h2>
                        <h2
                            class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                            WHY CHOOSE US?</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit. Natus hic atque magni minus aliquam, eos quam incidunt nam iusto sunt
                            voluptates
                            inventore a veritatis doloremque corrupti. Veritatis est expedita cupiditate!</p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">Faster Processing and Delivery</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-medium text-gray-500">Easy Payments</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">100% Protection and Security for Your
                                    App</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full"
                        src="https://cdn.pixabay.com/photo/2020/12/31/12/28/cook-5876388_960_720.png"
                        alt="feature image"></div>
            </div>
        </div>
    </section>

    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h3 class="text-2xl font-bold">Our Menu</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                TODAY'S SPECIALITY</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="flex justify-center md:justify-between  lg:flex-nowrap flex-wrap">

                @foreach ($menus as $menu)
                    @if ($menu->special)
                        <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                            <img class="w-full h-48" src="{{ asset($menu->image_path) }}" alt="Image" />
                            <div class="px-6 py-4">
                                <div class="flex mb-2">
                                    <span
                                        class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">{{ $menu->category->name }}</span>
                                </div>
                                <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                                    {{ $menu->name }}</h4>
                                <p class="leading-normal text-gray-700">{{ $menu->description }}</p>
                            </div>
                            <div class="flex items-center justify-between p-4">
                                {{-- <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button> --}}
                                <span class="text-xl text-green-600">${{ $menu->price }}</span>
                            </div>
                        </div>
                    @endif
                @endforeach


            </div>
        </div>
    </section>

    <section class="pt-4 pb-12 bg-gray-50">
        <div class="my-8 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Food Gallery</h2>
            <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
        </div>
        <div class="container grid gap-4 mx-auto lg:grid-cols-3">
            @php
                if ($menus_count > 5) {
                    $limit = 5;
                } else {
                    $limit = $menus_count;
                }
            @endphp
            @for ($i = 0; $i < $limit; $i++)
                <div class="w-full rounded">
                    <img src="{{ asset($menus[$i]->image_path) }}" alt="image" class="object-cover w-full h-80">
                </div>
            @endfor

        </div>
    </section>

    <section class="pt-4 pb-12 bg-gray-800">
        <div class="my-16 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Testimonial </h2>
            <p class="text-xl text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
        </div>

        <div class="container m-auto flex justify-center md:justify-between lg:flex-nowrap flex-wrap">
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg m-1 md:basis-5/12 lg:basis-auto  ">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                        dolores
                        deserunt
                        ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a
                        veritatis
                        pariatur
                        minus consequuntur!</p>
                </div>
                <div class="flex justify-start mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg m-1 md:basis-5/12 lg:basis-auto  ">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                        dolores
                        deserunt
                        ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a
                        veritatis
                        pariatur
                        minus consequuntur!</p>
                </div>
                <div class="flex justify-start mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg m-1 md:basis-5/12 lg:basis-auto  ">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                        dolores
                        deserunt
                        ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a
                        veritatis
                        pariatur
                        minus consequuntur!</p>
                </div>
                <div class="flex justify-start mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                </div>
            </div>
        </div>
    </section>



    <footer class="bg-gray-800 border-t border-gray-200">
        <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
            <div class="flex flex-wrap justify-center">
                <ul class="flex items-center space-x-4 text-white">
                    <li class="hover:underline underline-offset-4 hover:text-red-500"><a
                            href="{{ route('home') }}">Home</a></li>
                    <li class="hover:underline underline-offset-4 hover:text-red-500"><a
                            href="{{ env('PORTFOLIO_URL') }}">About</a></li>
                    <li class="hover:underline underline-offset-4 hover:text-red-500"><a
                            href="{{ env('PORTFOLIO_URL') }}">Contact</a></li>
                </ul>
            </div>
            <div class="flex justify-center mt-4 lg:mt-0">
                <a href="https://www.instagram.com/harraoui_sohaib/" class="ml-3">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6 text-pink-400" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5"
                            ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/harraoui-sohaib-89849b246" class="ml-3">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-6 h-6 text-blue-500" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

</x-home-layout>
