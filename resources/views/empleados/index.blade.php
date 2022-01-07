@extends('layout.layout')
@section('content')

<div>
    <table class="table">
        <h1>Empleados</h1>
        <button type="button" onclick="window.location='{{route('empleados.create')}}' " class="btn btn-primary"   id="crear-empleado">Crear Empleado</button>
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Sexo</th>
            <th scope="col">Area</th>
            <th scope="col">Boletin</th>
            <th scope="col">Opciones</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            @if ($empleados->isNotEmpty())
                @foreach ($empleados as $empleado)
                <th scope="row">{{$empleado->nombre}}</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>

                @endforeach
            @endif


          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>


</div>






@endsection
