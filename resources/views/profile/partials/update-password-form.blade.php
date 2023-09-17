<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="row">
            <x-input-label for="current_password" :value="__('Current Password')" class="col-md form-label"/>
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 col-md form-control" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="row">
            <x-input-label for="password" :value="__('New Password')" class="col-md form-label"/>
            <x-text-input id="password" name="password" type="password" class="mt-1 col-md form-control" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="row">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="col-md form-label"/>
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 col-md form-control" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center mt-4">
            <button class="btn btn-primary class  ="row"">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
