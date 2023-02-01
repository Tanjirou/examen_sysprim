<div>
    <div class="container">
        <div class="row">
            <h3 class="text-center">Gestionar departamentos</h3>
        </div>
        <div class="row">
            <a href="{{route('dashboard')}}" class="btn btn-secondary text-white w-lg-25">Regresar</a>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-md-8 col-lg-4">
                <form method="post" wire:submit.prevent='save'>
                    @csrf
                    <x-jet-input wire:model="department.name" class="{{ $errors->has('department') ? 'is-invalid' : '' }}" type="text"
                        :value="old('department')" required />
                    @error('department.name')<div class="mt-1 text-danger text-sm">{{$message}}</div>@enderror
                    <input type="submit" class="btn btn-success text-white mt-3 w-100" />
                </form>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-12 col-md-6">
                @if (session()->has('message'))
                    <h3 class="fw-bold text-center text-sm bg-primary text-white">{{session('message')}}</h3>
                @endif
                @if (session()->has('message-error'))
                    <h3 class="fw-bold text-center text-sm bg-danger text-white">{{session('message-error')}}</h3>
                @endif
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Departamento</th>
                        <th scope="col">Estatus</th>
                        <th scope="col">Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                        <tr>
                            <td>{{$department->name}}</td>
                            <td>{{($department->status)=='A' ? 'Activo':'En mantenimiento'}}</td>
                            <td>
                                <button wire:click="edit({{$department->id}})" type="button" class="text-white btn btn-primary rounded">Editar</button>
                                <button wire:click="delete({{$department->id}})" type="button" class="text-white btn btn-danger rounded">Eliminar</button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
