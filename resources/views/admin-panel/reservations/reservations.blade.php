<x-admin-panel-layout>
    @if (session()->has('message'))
        <x-closable-alert data-alert="{{ session()->get('message') }}" />
    @endif
    @if (session()->has('error'))
        <x-error-closable-alert data-alert="{{ session()->get('error') }}" />
    @endif
    <div class="m-3 text-right">
        <a href="{{ route('admin.reservations.create') }}"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-sky-700 rounded-lg hover:bg-sky-900 focus:ring-1 focus:ring-blue-500 focus:outline-none   ">
            New reservation
        </a>
    </div>
    <div class="overflow-x-auto shadow-md sm:-lg">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-black font-bold uppercase bg-gray-200">
                    <tr>
                        <th scope="col" class="ps-6 py-3">
                            Reserver name
                        </th>
                        <th scope="col" class="ps-6 py-3">
                            Reserver email
                        </th>
                        <th scope="col" class="ps-6 py-3">
                            Reserver phone
                        </th>
                        <th scope="col" class="ps-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="ps-6 py-3">
                            Table
                        </th>
                        <th scope="col" class="ps-6 py-3">
                            Guests
                        </th>
                        <th scope="col" class="ps-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $key => $reservation)
                        <tr class="bg-white  border-b text-gray-900">
                            <th scope="row" class="ps-6 py-4 font-medium  whitespace-nowrap">
                                {{ $reservation->reserver_name }}
                            </th>
                            <td class="ps-6 py-4">
                                {{ $reservation->reserver_email }}
                            </td>
                            <td class="ps-6 py-4">
                                {{ $reservation->reserver_phone }}
                            </td>
                            <td class="ps-6 py-4">
                                {!! str_replace(' ', ' / ', $reservation->reservation_date) !!}
                            </td>
                            @if ($reservation->table)
                                <td class="ps-6 py-4">
                                    {{ $reservation->table->name }}
                                </td>
                                <td class="ps-6 py-4 text-center">
                                    {{ $reservation->table->guest }}
                                </td>
                            @else
                                <td class="ps-6 py-4">
                                    No Table
                                </td>
                                <td class="ps-6 py-4 text-center">
                                    No Table
                                </td>
                            @endif
                            <td class="ps-6 py-4 flex">
                                <x-primary-button class="px-5 me-2">
                                    <a href="{{ route('admin.reservations.edit', ['reservation' => $reservation]) }}">
                                        Edit
                                    </a>
                                </x-primary-button>
                                <form class="p-0 m-0" method="POST"
                                    action="{{ route('admin.reservations.destroy', ['reservation' => $reservation]) }}"
                                    onsubmit="return confirm('Are u Sure u want to deleted this ')">
                                    @csrf
                                    @method('DELETE')
                                    <x-secondary-button type='submit' onclick="">
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
