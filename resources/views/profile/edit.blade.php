@if (auth()->user()->is_admin)
    <x-admin-panel-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800  leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot>

        <div class="py-0">
            <div class="max-w-7xl mx-auto sm:px-0 lg:px-0 space-y-6">
                <div class="p-4 sm:p-8 bg-white  shadow sm:-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </x-admin-panel-layout>
@else
    <x-home-layout>
        <div class="flex items-center justify-center">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800  leading-tight">
                    {{ __('Profile') }}
                </h2>
            </x-slot>

            <div class="pt-16">
                <div class="max-w-7xl mx-auto sm:px-0 lg:px-0 space-y-6">
                    <div class="p-4 sm:p-8 bg-white  shadow sm:-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-home-layout>
@endif
