<section>
    @if (session()->has('status'))
        <x-closable-alert data-alert="{{ session()->get('status') }}"> </x-closable-alert>
    @endif
    <header>
        <h2 class="text-lg font-medium text-gray-900  inline">
            {{ __('Mon profil') }}
        </h2>
        <p class="ml-2 mt-1 text-sm text-gray-600 inline">
            {{ __('Modifier mon profil') }}
        </p>

    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @method('patch')
        @csrf

        <h2>Mes informations :</h2>
        <div>
            <x-admin.input-label for="name" label="Full name" />
            <x-admin.text-input name="name" type="text" class="mt-1 block w-full" :value="$user->name" required
                autofocus autocomplete="name" />
            <x-admin.input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
            <x-admin.input-label for="email" label="Email" />
            <x-admin.text-input name="email" type="email" class="mt-1 block w-full" :value="$user->email" required
                autofocus autocomplete="email" />
            <x-admin.input-error class="mt-2" :messages="$errors->get('email')" />
        </div>


        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification"
                        class="underline text-sm text-gray-600  hover:text-gray-900  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600 ">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
        @endif
        </div>

        <div class="flex items-center gap-4 mt-5">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 ">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

