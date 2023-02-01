<div class="row justify-content-center my-5">
    <div class="col-12 col-lg-8">
        <div class="card shadow bg-light">
            <div class="card-body bg-white px-5 py-3 border-bottom rounded-top">
                <div class="mx-3 my-3">
                    <h3 class="h3 my-4 text-center">
                       Opciones
                    </h3>
                    @if (auth()->user()->user_type ==1)
                   <div class="row d-lg-flex justify-content-around gap-2">

                        <a href="{{route('department.index')}}" class="btn btn-primary text-white w-lg-25">Departamentos</a>


                        <a class="btn btn-secondary text-white w-lg-25">Empleados</a>

                   </div>
                    @else
                    <div class="text-muted">
                        Esta es una aplicacion que se encuentra en desarrollo lo cual va a ir escalando a medida que se agreguen mas modulos
                     </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
