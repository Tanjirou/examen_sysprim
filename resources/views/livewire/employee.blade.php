<div>
    <div class="container">
        <div class="row">
            <h3 class="text-center">Gestionar Empleados</h3>
        </div>
        <div class="row justify-content-lg-around">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary text-white w-lg-25">Regresar</a>
            <a href="{{ route('employee.create') }}" class="btn btn-primary text-white w-lg-25">Crear</a>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-12 col-md-8">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cedula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Departamento</th>
                            <th scope="col">Estatus</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                        <tr>

                                <td>{{ $employee->dni }}</td>
                                <td>{{ $employee->names }}</td>
                                <td>{{ $employee->gender }}</td>
                                <td>{{ date_diff(date_create($employee->date_birth),date_create(date('Y-m-d')))->format('%y') }}</td>
                                <td>{{ $employee->departments }}</td>
                                @if ($employee->status == 'A')
                                    <td>Activo</td>
                                @elseif ($employee->status == 'D')
                                    <td>Desincorporado</td>
                                @else
                                    <td>Retirado</td>
                                @endif
                                <td class="d-flex justify-content-around gap-2">
                                    @if(date_diff(date_create($employee->date_birth),date_create(date('Y-m-d')))->format('%y')>60 && $employee->status !=='R')
                                        <button wire:click="remove({{$employee->id}})" class="btn btn-danger text-white">Retirar</button>
                                    @endif
                                    @if($employee->status =='A')
                                    <button wire:click="disincorporate({{$employee->id}})" class="btn btn-dark text-white" type="button">Desincorporar</button>
                                    <button wire:click="remove({{$employee->id}})" class="btn btn-danger text-white" type="button">Retirar</button>
                                    @endif

                                    @if($employee->status =='D')
                                    <button wire:click="remove({{$employee->id}})" class="btn btn-danger text-white">Retirar</button>
                                    @endif

                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
