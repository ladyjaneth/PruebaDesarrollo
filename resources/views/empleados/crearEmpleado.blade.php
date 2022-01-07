@extends('layout.layout')
@section('content')


<div class="container">
    <h1>Crear Empleado</h1>
    <form action="{{route('empleados.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="exampleInputEmail1" required name="nombre" placeholder="Nombre Completo"  aria-describedby="emailHelp">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
            </div>
            <div class="col-6">
                <input type="email" class="form-control" id="exampleInputEmail1" required name="email" placeholder="Correo Electrónico" aria-describedby="emailHelp">
            </div>
        </div>

            <div class="row">
                <div class="col-6">
                    <label for="exampleInputEmail1" class="form-label">Sexo</label>
                </div>
                <div class="col-6">
                    <div class="mb-3 form-check">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="sexo" value="m" id="masculino">
                            <label class="form-check-label" for="masculino">
                            Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="sexo" value="f" id="femenino" >
                            <label class="form-check-label" for="femenino">
                            Femenino
                            </label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label">Área</label>
                </div>
                <div class="col">
                    <select class="form-select" aria-label="Default select example" name="area_id" >
                        <option selected>Seleccione...</option>
                        @if ($areas->isNotEmpty())
                            @foreach ($areas as $area)
                                <option value="{{$area->id}}">{{$area->nombre}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Descripción</label>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" name="descripcion" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label  for="floatingSelect">Descripción de la experiencia del empleado</label>
                          </div>
                    </div>

                    <div class="row">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="boletin" value="1" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Deseo Recibir Boletín Informativo
                                </label>
                              </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1" class="form-label">Roles</label>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  name="roles" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      Profesional de Proyectos - Desarrollador
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  name="roles" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                      Gerente Estratégico
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  name="roles" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                     Auxiliar Aministrativo
                                    </label>
                        </div>

                    <div class="row">
                        <div class="col">
                           <button class="btn btn-primary" id="guardar_empleado">Guardar</button>
                          </div>

                    </div>
    </form>
</div>

@endsection

@section('js')
    <script src="/js/guardar.js" ></script>
@endsection

