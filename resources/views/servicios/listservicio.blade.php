<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h1>Listar Servicios</h1>
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
      <th scope="col">Descripción</th>
      <th scope="col">Costo</th>
      <th scope="col">Estatus</th>
      <th scope="col">Fecha Registro</th>
    </tr>
  </thead>
  <tbody>
      @foreach($servicios as $servicio)
    <tr>
      <th>{{$servicio->idservicio}}</th>
      <th>{{$servicio->descripcion}}</th>
      <th>{{$servicio->costo}}</th>
      <th>{{$servicio->estatus}}</th>
      <th>{{$servicio->fechareg}}</th>
      <th><form action="" methosd="post">
            <input type="submit" onclick="return confirm('¿Quires Borrar?')" value="Borrar">
          </form>
          <form action="" methosd="post">
            <input type="submit" onclick="return confirm('¿Quires Editar?')" value="Editar">
          </form></th>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection