<x-admin-panel-layout>
    <section class="relative flex flex-nowrap ml-auto mr-auto mt-0 lg:items-center w-11/12">
        <div class="w-full py-5 md:py-2 lg:w-1/2 mr-3 overflow-y-auto">
            {{-- form header --}}
            <div class="max-w-lg text-center">
                <h1 class="text-1xl font-bold sm:text-2xl">New Table !</h1>

                <p class="mt-1 text-gray-500">
                </p>
            </div>

            <form method="POST" action="{{ route('admin.tables.store') }}" class="mx-auto mb-0 mt-6 max-w-md space-y-4">
                @csrf
                {{-- table name --}}
                <div>
                    <x-admin.input-label for="name" label="Name" />
                    <x-admin.text-input id="name" name="name" type="text" class="mt-1 block w-full" required
                        autofocus autocomplete="name" />
                    <x-admin.input-error class="mt-2" :messages="$errors->get('name')" />
                </div>
                {{-- quest --}}
                <div>
                    <x-admin.input-label for="guest" label="Guest number" />
                    <x-admin.text-input name="guest" type="number" class="mt-1 block w-full" required autofocus
                        autocomplete="number" />
                    <x-admin.input-error class="mt-2" :messages="$errors->get('guest')" />
                </div>
                {{-- status --}}
                <div>
                    <x-admin.input-label for="name" label="Status" />
                    <select name="status" required
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="" selected>Choose a category</option>
                        <option value="Available">Available</option>
                        <option value="Pending">Pending</option>
                        <option value="Unavailable">Unavailable</option>
                    </select>
                    <x-admin.input-error class="mt-2" :messages="$errors->get('status')" />
                </div>
                {{-- location --}}
                <div>
                    <x-admin.input-label for="name" label="Location" />
                    <select name="location" required
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="" selected>Choose a category</option>
                        <option value="Front">Front</option>
                        <option value="Inside">Inside</option>
                        <option value="Outside">Outside</option>
                    </select>
                    <x-admin.input-error class="mt-2" :messages="$errors->get('location')" />
                </div>

                {{-- cancel & update --}}
                <div class="flex items-center justify-between">
                    <x-secondary-button class="px-5 py-3"><a class="m-0 p-0"
                            href="{{ route('admin.tables.index') }}">Cancel</a>
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
