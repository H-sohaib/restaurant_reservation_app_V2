<x-admin-panel-layout>
    @if (session()->has('message'))
        <x-closable-alert data-alert="{{ session()->get('message') }}" />
    @endif
    @if (session()->has('error'))
        <x-error-closable-alert data-alert="{{ session()->get('error') }}" />
    @endif
    <div class="m-3 text-right">
        <a href="{{ route('admin.categories.create') }}"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-sky-700 rounded-lg hover:bg-sky-900 focus:ring-1 focus:ring-blue-500 focus:outline-none   ">
            New category
        </a>
    </div>
    <div class="overflow-x-auto shadow-md sm:-lg flex flex-wrap justify-around xl:justify-start">
        @foreach ($categories as $key => $category)
            <div
                class="relative max-w-sm md:w-2/4 xl:w-2/6 bg-white border border-gray-200 shadow flex flex-col justify-between">
                <div>
                    @if ($category->image_path)
                        <img class="rounded-t-lg w-full max-h-64 object-cover" src="{{ asset($category->image_path) }}"
                            alt="" />
                    @else
                        <img class="rounded-t-lg w-full max-h-64 object-cover h-64" src="{{ asset('imgs/default.png') }}"
                            alt="" />
                    @endif
                    <div class="p-5">
                        <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                            {{ $category->name }}</h4>
                        <p class="mb-3 font-normal text-gray-700 break-words">{{ $category->description }}</p>

                    </div>
                </div>

                <div class="z-50 absolute p-4  text-red-800 border border-red-300 rounded-lg bg-red-50 w-full text-center bottom-0 hidden"
                    role="alert" id="confirm-delete-{{ $category->id }}">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Info</span>
                        <h3 class="text-lg font-medium">Confirm delete</h3>
                    </div>
                    <div class="mt-2 mb-4 text-sm">
                        Are you sure you want to delete this ?
                    </div>
                    <div class="flex">
                        <x-primary-button class="cancel-button mr-2">Cancel</x-primary-button>
                        <form class="" method="POST"
                            action="{{ route('admin.categories.destroy', ['category' => $category]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-full h-full confirm-button text-red-800 bg-transparent border border-red-800 hover:bg-red-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center ">
                                Confim
                            </button>
                        </form>
                    </div>
                </div>


                <div>
                    <div class="ml-3 mb-3">
                        <x-primary-button class="">
                            <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}"> Edit
                            </a>
                        </x-primary-button>
                        <x-secondary-button data-id="{{ $category->id }}" id="delete"> {{-- {{ route('admin.categories.destroy', ['category' => $category->id]) }} --}}
                            Delete
                        </x-secondary-button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-admin-panel-layout>

{{-- <script type="module" src="{{ mix('/dist/main.js') }}"></script> --}}
