<x-app-layout>

    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-center">Registrar usuario</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 border">
                <div class="card-body">
                    <form method="POST" action="{{route('employee.store')}}">
                        @csrf
                        <div class="mb-3 mt-3">
                            <x-jet-label value="{{ __('Cedula') }}" />

                            <x-jet-input class="{{ $errors->has('dni') ? 'is-invalid' : '' }}" type="text"
                                name="dni" :value="old('dni')" required autofocus autocomplete="dni" required />
                            <x-jet-input-error for="dni"></x-jet-input-error>
                        </div>
                        <div class="mb-3">
                            <x-jet-label value="{{ __('Nombre') }}" />

                            <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                                name="name" :value="old('name')" required autofocus autocomplete="name" />
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
                                <input class="{{ $errors->has('gender') ? 'is-invalid' : '' }} form-check-input"
                                    type="radio" name="gender" value="H" required autofocus
                                    autocomplete="gender" id="male" />
                                <x-jet-label value="{{ __('Hombre') }}" for="male" />
                                <input class="{{ $errors->has('gender') ? 'is-invalid' : '' }} form-check-input"
                                    type="radio" name="gender" value="M" required autofocus
                                    autocomplete="gender" id="female" />
                                <x-jet-label value="{{ __('Mujer') }}" for="female" />
                            </div>
                            <x-jet-input-error for="gender"></x-jet-input-error>
                        </div>

                        <div class="mb-3">
                            <x-jet-label value="{{ __('Departamento') }}" />
                            <div>
                                <select name="department" id="department" class="form-select">
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <x-jet-input-error for="gender"></x-jet-input-error>
                        </div>

                        <div class="mb-3">
                            <x-jet-label value="{{ __('Usuario') }}" />
                            <div>
                                <select name="user_type" id="user_type" class="form-select">
                                    @foreach ($user_types as $user_type)
                                        <option value="{{ $user_type->id }}">{{ $user_type->description }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <x-jet-input-error for="gender"></x-jet-input-error>
                        </div>

                        <div class="mb-3">
                            <x-jet-label value="{{ __('Correo') }}" />

                            <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                name="email" :value="old('email')" required />
                            <x-jet-input-error for="email"></x-jet-input-error>
                        </div>

                        <div class="mb-3">
                            <x-jet-label value="{{ __('Contraseña') }}" />

                            <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                name="password" required autocomplete="new-password" />
                            <x-jet-input-error for="password"></x-jet-input-error>
                        </div>

                        <div class="mb-3">
                            <x-jet-label value="{{ __('Confirmar contraseña') }}" />

                            <x-jet-input class="form-control" type="password" name="password_confirmation" required
                                autocomplete="new-password" />
                        </div>
                        <div class="row  d-flex justify-content-center w-lg-25 p-3">
                            <x-jet-button>
                                {{ __('Registrar') }}
                            </x-jet-button>
                        </div>

                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>

</x-app-layout>
