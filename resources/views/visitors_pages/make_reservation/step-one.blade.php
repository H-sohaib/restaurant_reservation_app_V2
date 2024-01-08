<x-app-layout>
    @if (session()->has('message'))
        <x-closable-alert data-alert="{{ session()->get('message') }}" />
    @endif
    @if (session()->has('error'))
        <x-error-closable-alert data-alert="{{ session()->get('error') }}" />
    @endif
    <div class="container w-4/5 px-5 mx-auto">
        <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
            <div class="flex flex-col md:flex-row items-center ">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img class="object-cover w-full"
                        src="https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790__340.jpg" alt="img" />
                </div>
                <div class="flex items-center justify-center p-6 py-4 md:w-1/2">
                    <div class="w-full">
                        <h3 class="mb-4 text-xl font-bold text-blue-600">Make Reservation</h3>

                        <div class="w-full bg-gray-200 rounded-full">
                            <div
                                class="w-2/4 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                Step1</div>
                        </div>

                        <form method="POST" action="{{ route('make_reservation.step_one.store') }}">
                            @csrf
                            {{-- name --}}
                            <div class="sm:col-span-6">
                                <label for="first_name" class="block text-sm font-medium text-gray-700"> Full Name
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="reserver_name"
                                        value="{{ isset($reservation) ? $reservation->reserver_name : auth()->user()->name ?? '' }}"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                <x-admin.input-error class="mt-2" :messages="$errors->get('reserver_name')" />
                            </div>
                            {{-- email --}}
                            <div class="sm:col-span-6">
                                <label for="email" class="block text-sm font-medium text-gray-700"> Email
                                </label>
                                <div class="mt-1">
                                    <input type="email" id="email" name="reserver_email"
                                        value="{{ isset($reservation) ? $reservation->reserver_email : auth()->user()->email ?? '' }}"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                <x-admin.input-error class="mt-2" :messages="$errors->get('reserver_email')" />
                            </div>
                            {{-- phone --}}
                            <div class="sm:col-span-6">
                                <label for="tel_number" class="block text-sm font-medium text-gray-700"> Phone
                                    number
                                </label>
                                <div class="mt-1">
                                    <input type="text" name="reserver_phone"
                                        value="{{ $reservation->reserver_phone ?? '' }}"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                <x-admin.input-error class="mt-2" :messages="$errors->get('reserver_phone')" />
                            </div>
                            {{-- reservation date --}}
                            <div class="sm:col-span-6">
                                <label for="res_date" class="block text-sm font-medium text-gray-700"> Reservation
                                    Date
                                </label>
                                <div class="mt-1">
                                    <input type="datetime-local" name="reservation_date"
                                        min="{{ $min_date->toDateTimeString() }}"
                                        max="{{ $max_date->toDateTimeString() }}"
                                        value="{{ isset($reservation) ? $reservation->reservation_date : '' }}"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                <span class="text-xs">Please choose the time between
                                    {{ config('app.rest_open_time') }}-{{ config('app.rest_close_time') }}.</span>
                                <x-admin.input-error class="mt-2" :messages="$errors->get('reservation_date')" />
                            </div>
                            {{-- guest --}}
                            <div class="sm:col-span-6">
                                <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest
                                    Number
                                </label>
                                <div class="mt-1">
                                    <input type="number" id="guest_number" name="guest"
                                        value="{{ $reservation->guest ?? '' }}"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                <x-admin.input-error class="mt-2" :messages="$errors->get('guest')" />
                            </div>
                            {{-- submit --}}
                            <div class="mt-6 p-4 flex justify-end">
                                <button type="submit"
                                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


</x-app-layout>
