<x-admin-panel-layout>
    {{-- 
  * name 
  * description
  * image
--}}
    <section class="relative flex flex-nowrap ml-auto mr-auto mt-0 lg:items-center w-11/12">
        <div class="w-full py-5 md:py-2 lg:w-1/2 mr-3">
            {{-- form header --}}
            <div class="max-w-lg text-center">
                <h1 class="text-1xl font-bold sm:text-2xl">Edit category '{{ $category->name }}'!</h1>

                <p class="mt-1 text-gray-500">
                </p>
            </div>

            <form method="post" action="{{ route('admin.categories.update', ['category' => $category->id]) }}"
                class="mx-auto mb-0 mt-6 max-w-md space-y-4" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                {{-- category name --}}
                <div>
                    <x-admin.input-label for="name" label="Name" />
                    <x-admin.text-input id="name" name="name" type="text" class="mt-1 block w-full"
                        :value="old('category', $category->name)" required autofocus autocomplete="name" />
                    <x-admin.input-error class="mt-2" :messages="$errors->get('category')" />
                </div>
                {{-- category description --}}
                <div>
                    <x-admin.input-label for="description" label="Description" />
                    <textarea name="description" id="description" rows="4"
                        class="resize-y mt-1 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 "
                        placeholder="Write your description here...">{{ $category->description }}</textarea>
                    <x-admin.input-error class="mt-2" :messages="$errors->get('description')" />
                </div>
                {{-- category image    --}}
                <x-image-input label="Category image" name="image" title="Select an image for category"
                    :imgpath="$category->image_path" />
                {{-- cancel & update --}}
                <div class="flex items-center justify-between">
                    <a class="inline-block rounded-lg bg-red-700 px-5 py-3 text-sm font-medium text-white"
                        href="{{ route('admin.categories.index') }}">Cancel</a>

                    <button type="submit"
                        class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
                        Update
                    </button>
                </div>
            </form>
        </div>

        <div class="relative lg:w-6/12 md:mb-52 lg:mb-34">
            <img alt="Welcome" src="{{ asset('imgs/category.webp') }}" class="absolute inset-0 w-full" />
        </div>

    </section>

</x-admin-panel-layout>

{{-- <label class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
                        Profile Photo <span class="text-red-600"> </span>
                    </label> --}}
{{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script> --}}
