<x-home-layout>
    <div class="container w-full px-5 mx-auto mt-16">
        <div class="mt-4 text-center my-6">
            <h3 class="text-2xl font-bold"></h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Our Menus</h2>
        </div>
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach ($menus as $menu)
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
            @endforeach
        </div>

        <div>
            {{ $menus->links() }}
        </div>
    </div>
</x-home-layout>
