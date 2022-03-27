<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h1>Listar Trabajadores</h1>
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Dashboard</h1>
@stop
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
      <th scope="col">Direccion</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Correo</th>
      <th scope="col">Tipo</th>
      <th scope="col">Estatus</th>
    </tr>
  </thead>
  <tbody>
      @foreach($trabajadores as $trabajador)
    <tr>
      <td>{{$trabajador->idtrabajador}}</td>
      <td>{{$trabajador->nombre}}</td>
      <td>{{$trabajador->apaterno}}</td>
      <td>{{$trabajador->amaterno}}</td>
      <td>{{$trabajador->direccion}}</td>
      <td>{{$trabajador->telefono}}</td>
      <td>{{$trabajador->correo}}</td>
      <td>{{$trabajador->tipo}}</td>
      <td>{{$trabajador->estatus}}</td>
      <td>
          <form action="" methosd="post">
            <input type="submit" onclick="return confirm('¿Quires Borrar?')" value="Borrar">
          </form>
          <form action="" methosd="post">
            <input type="submit" onclick="return confirm('¿Quires Editar?')" value="Editar">
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection