<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h1>Listar Ventas</h1>
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
      <th scope="col">Fecha</th>
      <th scope="col">ID Vehiculo</th>
      <th scope="col">ID Cajero</th>
      <th scope="col">ID Trabajador</th>
      <th scope="col">ID Servicio</th>
      <th scope="col">Estatus</th>
    </tr>
  </thead>
  <tbody>
      @foreach($ventas as $venta)
    <tr>
      <th>{{$venta->idventa}}</th>
      <th>{{$venta->fecha}}</th>
      <th>{{$venta->idvehiculo}}</th>
      <th>{{$venta->idcajero}}</th>
      <th>{{$venta->idtrabajador}}</th>
      <th>{{$venta->idservicio}}</th>
      <th>{{$venta->estatus}}</th>
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