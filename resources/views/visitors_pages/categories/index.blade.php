<x-home-layout>
    <div class="container w-full px-5 mx-auto mt-16">
        <div class="mt-4 text-center my-6">
            <h3 class="text-2xl font-bold"></h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Our Categories</h2>
        </div>
        <div class="grid lg:grid-cols-4 gap-y-6">

            @foreach ($categories as $category)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <img class="w-full h-48"
                        src="{{ asset($category->image_path) }}"
                        alt="Image" />
                    <div class="px-6 py-4">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                            {{ $category->name }}
                        </h4>
                        <p class="leading-normal text-gray-700 break-words">{{ $category->description }}</p>
                    </div>
                    <div class="flex items-center justify-between p-4">
                        <a href="{{ route('main_page.categories.menus', ['category' => $category]) }}"
                            class="px-4 py-2 bg-green-600 text-green-50">Show menus</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div>
            {{ $categories->links() }}
        </div>
    </div>
</x-home-layout>
