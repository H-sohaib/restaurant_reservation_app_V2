<x-admin-panel-layout>
    @if (session()->has('message'))
        <x-closable-alert data-alert="{{ session()->get('message') }}" />
    @endif
    @if (session()->has('error'))
        <x-error-closable-alert data-alert="{{ session()->get('error') }}" />
    @endif
    <div class="m-3 text-right">
        <a href="{{ route('admin.tables.create') }}"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-sky-700 rounded-lg hover:bg-sky-900 focus:ring-1 focus:ring-blue-500 focus:outline-none   ">
            New Tables
        </a>
    </div>
    <div class="overflow-x-auto shadow-md sm:-lg">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-black font-bold uppercase bg-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Table name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quest
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Location
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tables as $key => $table)
                        <tr class="bg-white  border-b text-gray-900">
                            <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap">
                                {{ $table->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $table->guest }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $table->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $table->location }}
                            </td>
                            <td class="py-4 flex">
                                <x-primary-button class="px-5 me-2">
                                    <a href="{{ route('admin.tables.edit', ['table' => $table]) }}">
                                        Edit
                                    </a>
                                </x-primary-button>
                                <form class="p-0 m-0" method="POST"
                                    action="{{ route('admin.tables.destroy', ['table' => $table]) }}"
                                    onsubmit="return confirm('Are u Sure u want to deleted this ?')">
                                    @csrf
                                    @method('DELETE')
                                    <x-secondary-button type='submit'>
                                        Delete
                                    </x-secondary-button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-admin-panel-layout>

{{-- <script type="module" src="{{ mix('/dist/main.js') }}"></script> --}}
