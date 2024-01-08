<x-admin-panel-layout>
    @if (session()->has('message'))
        <x-closable-alert data-alert="{{ session()->get('message') }}" />
    @endif
    @if (session()->has('error'))
        <x-error-closable-alert data-alert="{{ session()->get('error') }}" />
    @endif
    <div class="m-3 text-right">
        <a href="{{ route('admin.menus.create') }}"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-sky-700 rounded-lg hover:bg-sky-900 focus:ring-1 focus:ring-blue-500 focus:outline-none   ">
            New menu
        </a>
    </div>
    <div class="overflow-x-auto shadow-md sm:-lg flex flex-wrap justify-around xl:justify-start">
        @foreach ($menus as $key => $menu)
            <div
                class="relative max-w-sm md:w-2/4 xl:w-2/6 bg-white border border-gray-200 shadow flex flex-col justify-between ">
                <div class="relative overflow-hidden rounded-none bg-white bg-clip-border text-gray-700">
                    <img src="{{ asset($menu->image_path) }}"
                        class="rounded-t-lg w-full max-h-64 object-cover" />
                </div>
                <div class="p-6">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                            {{ $menu->name }}
                        </p>
                        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                            ${{ $menu->price }}
                        </p>
                    </div>
                    <p
                        class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-90 break-words">
                        {{ $menu->description }}
                    <p class="text-red-700">{{ $menu->special ? 'Special' : '' }}</p>
                    </p>
                </div>

                <x-confirm-delete deleteRoute="{{ route('admin.menus.destroy', ['menu' => $menu->id]) }}"
                    :elementid="$menu->id" id="confirm-delete-{{ $menu->id }}"
                    class="w-full text-center bottom-0 hidden" />

                <div class="ml-3 mb-3">
                    <x-primary-button class=""><a href="{{ route('admin.menus.edit', ['menu' => $menu->id]) }}">
                            Edit
                        </a></x-primary-button>
                    <x-secondary-button data-id="{{ $menu->id }}" id="delete"> {{-- {{ route('admin.categories.destroy', ['category' => $category->id]) }} --}}
                        Delete
                    </x-secondary-button>
                </div>
            </div>
        @endforeach
    </div>

</x-admin-panel-layout>

{{-- <script type="module" src="{{ mix('/dist/main.js') }}"></script> --}}
