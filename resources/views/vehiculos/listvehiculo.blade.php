<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h1>Listar Vehiculos</h1>
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
      <th scope="col">Placa</th>
      <th scope="col">Tipo</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Color</th>
      <th scope="col">Puertas</th>
      <th scope="col">Estatus</th>
      <th scope="col">ID Cliente</th>
      <th scope="col">Fecha de Registro</th>
    </tr>
  </thead>
  <tbody>
      @foreach($vehiculos as $vehiculo)
    <tr>
      <th>{{$vehiculo->idvehiculo}}</th>
      <th>{{$vehiculo->placa}}</th>
      <th>{{$vehiculo->tipo}}</th>
      <th>{{$vehiculo->marca}}</th>
      <th>{{$vehiculo->modelo}}</th>
      <th>{{$vehiculo->color}}</th>
      <th>{{$vehiculo->puertas}}</th>
      <th>{{$vehiculo->estatus}}</th>
      <th>{{$vehiculo->idcliente}}</th>
      <th>{{$vehiculo->fechareg}}</th>
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