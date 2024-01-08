<x-admin-panel-layout>
    {{-- 
        * reserver_name
        * reserver_email
        * reserver_phone
        * reservation_date
        * table->name
        * table->guest
        --}}
    <section class="relative flex flex-nowrap ml-auto mr-auto mt-0 lg:items-center w-11/12">
        <div class="w-full py-5 md:py-2 lg:w-1/2 mr-3 overflow-y-auto">
            {{-- form header --}}
            <div class="max-w-lg text-center">
                <h1 class="text-1xl font-bold sm:text-2xl">Edit reservation number {{ $reservation->id }} !</h1>

                <p class="mt-1 text-gray-500">
                </p>
            </div>

            <form method="POST" action="{{ route('admin.reservations.update', ['reservation' => $reservation]) }}"
                class="mx-auto mb-0 mt-6 max-w-md space-y-4">
                @csrf
                @method('PATCH')

                {{-- name --}}
                <div>
                    <x-admin.input-label for="reserver_name" label="Reserver full name" />
                    <x-admin.text-input id="name" name="reserver_name" type="text" class="mt-1 block w-full"
                        autofocus autocomplete="name" :value="$reservation->reserver_name" />
                    <x-admin.input-error class="mt-2" :messages="$errors->get('reserver_name')" />
                </div>
                {{-- email --}}
                <div>
                    <x-admin.input-label for="reserver_email" label="Reserver email" />
                    <x-admin.text-input name="reserver_email" type="email" class="mt-1 block w-full" autofocus
                        autocomplete="email" :value="$reservation->reserver_email" />
                    <x-admin.input-error class="mt-2" :messages="$errors->get('reserver_email')" />
                </div>
                {{-- phone --}}
                <div>
                    <x-admin.input-label for="reserver_phone" label="Reserver phone number" />
                    <x-admin.text-input name="reserver_phone" placeholder="0652525252" type="tel"
                        class="mt-1 block w-full" autofocus autocomplete="" :value="$reservation->reserver_phone" />
                    <x-admin.input-error class="mt-2" :messages="$errors->get('reserver_phone')" />
                </div>
                {{-- Date --}}
                <div>
                    <x-admin.input-label for="reservation_date" label="Reservation date" />
                    <x-admin.text-input name="reservation_date" type="datetime-local" class="mt-1 block w-full"
                        autofocus autocomplete="date" :value="$reservation->reservation_date" />
                    <x-admin.input-error class="mt-2" :messages="$errors->get('reservation_date')" />
                </div>
                {{-- Guest --}}
                <div>
                    <x-admin.input-label for="guest" label="Guests" />
                    <x-admin.text-input name="guest" type="number" class="mt-1 block w-full" autofocus
                        autocomplete="number" :value="$reservation->guest" />
                    <x-admin.input-error class="mt-2" :messages="$errors->get('guest')" />
                </div>
                {{-- Table --}}
                <div>
                    <x-admin.input-label for="table_id" label="Table" />
                    <select name="table_id"
                        class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="" selected>Choose a Table</option>
                        @foreach ($tables as $table)
                            <option @selected($table->id == $reservation->table_id) value="{{ $table->id }}">{{ $table->name }} (guests
                                : {{ $table->guest }})
                            </option>
                        @endforeach
                    </select>
                    <x-admin.input-error class="mt-2" :messages="$errors->get('table_id')" />
                </div>

                {{-- cancel & update --}}
                <div class="flex items-center justify-between">
                    <x-secondary-button class="px-5 py-3"><a class="m-0 p-0"
                            href="{{ route('admin.reservations.index') }}">Cancel</a>
                    </x-secondary-button>
                    <x-primary-button class="px-5 py-3" type='submit'>{{ __('Update') }}</x-primary-button>

                </div>
            </form>
        </div>

        <div class="relative lg:w-6/12 md:mb-52 lg:mb-34">
            <img alt="Welcome" src="{{ asset('imgs/category.webp') }}" class="absolute inset-0 w-full" />
        </div>
    </section>

</x-admin-panel-layout>
