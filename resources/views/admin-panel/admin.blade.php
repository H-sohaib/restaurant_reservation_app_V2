<x-admin-panel-layout>


    <div class="flex flex-wrap justify-around">
        @foreach ($site_stats as $stat)
            <div class="flex flex-col justify-between h-56 w-56 p-6 bg-white border border-gray-200 rounded-lg shadow">

                <div>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                            {{ $stat['header'] }}</h5>
                    </a>
                    <h1 class=" text-center mb-3 text-6xl font-extrabold text-gray-700 ">{{ $stat['stats'] }}</h1>
                </div>

                <a href="{{ $stat['route'] }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                    Explore
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        @endforeach

    </div>
</x-admin-panel-layout>
