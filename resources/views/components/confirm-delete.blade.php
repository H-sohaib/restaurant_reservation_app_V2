@props(['deleteRoute'])
<div {{ $attributes->merge(['class' => 'z-50 absolute w-3/4 p-4  text-red-800 border border-red-300 rounded-lg bg-red-50 ']) }}
    role="alert">
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
        <form class="" method="POST" action="{{ $deleteRoute }}">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="w-full h-full confirm-button text-red-800 bg-transparent border border-red-800 hover:bg-red-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center ">
                Confim
            </button>
        </form>
    </div>
</div>
