<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-3" />

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <x-jet-label value="{{ __('Cedula') }}" />

                    <x-jet-input class="{{ $errors->has('dni') ? 'is-invalid' : '' }}" type="text" name="dni"
                        :value="old('dni')" required autofocus autocomplete="dni" />
                    <x-jet-input-error for="dni"></x-jet-input-error>
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('Nombre') }}" />

                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('fecha de nacimiento') }}" />

                    <x-jet-input class="{{ $errors->has('date_birth') ? 'is-invalid' : '' }}" type="date"
                        name="date_birth" :value="old('date_birth')" required autofocus autocomplete="date_birth" />
                    <x-jet-input-error for="date_birth"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Sexo') }}" />
                    <div>
                        <input class="{{ $errors->has('gender') ? 'is-invalid' : '' }} form-check-input" type="radio" name="gender"
                            value="H" required autofocus autocomplete="gender" id="male" />
                        <x-jet-label value="{{ __('Hombre') }}" for="male" />
                        <input class="{{ $errors->has('gender') ? 'is-invalid' : '' }} form-check-input" type="radio" name="gender"
                            value="M" required autofocus autocomplete="gender" id="female" />
                        <x-jet-label value="{{ __('Mujer') }}" for="female" />
                    </div>
                    <x-jet-input-error for="gender"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Correo') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                        :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Contrase??a') }}" />

                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                        name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Confirmar contrase??a') }}" />

                    <x-jet-input class="form-control" type="password" name="password_confirmation" required
                        autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="terms" name="terms">
                            <label class="custom-control-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '">' . __('Terms of Service') . '</a>',
                                    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '">' . __('Privacy Policy') . '</a>',
                                ]) !!}
                            </label>
                        </div>
                    </div>
                @endif

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('??Est??s Registrado?') }}
                        </a>

                        <x-jet-button>
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
