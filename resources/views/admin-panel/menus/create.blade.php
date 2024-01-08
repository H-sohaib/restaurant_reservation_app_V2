<x-admin-panel-layout>
    {{-- 
* name 
* description
* image
* price
* category_id
--}}
    <section class="relative flex flex-nowrap ml-auto mr-auto mt-0 lg:items-center w-11/12">
        <div class="w-full py-5 md:py-2 lg:w-1/2 mr-3 overflow-y-auto">
            {{-- form header --}}
            <div class="max-w-lg text-center">
                <h1 class="text-1xl font-bold sm:text-2xl">Create new Plate !</h1>

                <p class="mt-1 text-gray-500">
                </p>
            </div>

            <form method="POST" action="{{ route('admin.menus.store') }}" class="mx-auto mb-0 mt-6 max-w-md space-y-4"
                enctype="multipart/form-data">
                @csrf
                {{-- plate name --}}
                <div>
                    <x-admin.input-label for="name" label="Name" />
                    <x-admin.text-input id="name" name="name" type="text" class="mt-1 block w-full" required
                        autofocus autocomplete="name" />
                    <x-admin.input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
                {{-- plate description --}}
                <div>
                    <x-admin.input-label for="description" label="Description" />
                    <textarea name="description" id="description" rows="4"
                        class="resize-y mt-1 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 "
                        placeholder="Write your description here..."></textarea>
                    <x-admin.input-error class="mt-2" :messages="$errors->get('description')" />
                </div>
                {{-- plate image    --}}
                <x-image-input label="Category image" name="image" title="Select an image for category" />
                {{-- plate price --}}
                <div>
                    <x-admin.input-label for="name" label="Name" />
                    <x-admin.text-input name="price" type="number" class="mt-1 block w-full" required autofocus
                        autocomplete="number" placeholder="write the price by DH" />
                    <x-admin.input-error class="mt-2" :messages="$errors->get('price')" />
                </div>
                {{-- special --}}

                <div>
                    <x-admin.input-label class="mb-2" for="name" label="Special" />
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input name="special" type="checkbox" value="1" class="sr-only peer">
                        <div
                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300  rounded-full peer  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-blue-600">
                        </div>
                        <span class="ml-3 text-sm font-medi um text-gray-900 ">Special menu</span>
                    </label>
                </div>

                {{-- catgeprie --}}
                <div>
                    <x-admin.input-label for="name" label="Select a category" />

                    <select id="category" name="category_id" required
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="" selected>Choose a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                </div>

                {{-- cancel & update --}}
                <div class="flex items-center justify-between">
                    <x-secondary-button class="px-5 py-3"><a class="m-0 p-0"
                            href="{{ route('admin.menus.index') }}">Cancel</a>
                    </x-secondary-button>
                    <x-primary-button class="px-5 py-3" type='submit'>{{ __('Create') }}</x-primary-button>

                </div>
            </form>
        </div>

        <div class="relative lg:w-6/12 md:mb-52 lg:mb-34">
            <img alt="Welcome" src="{{ asset('imgs/category.webp') }}" class="absolute inset-0 w-full" />
        </div>
    </section>

</x-admin-panel-layout>
