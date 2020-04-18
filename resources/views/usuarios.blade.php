@extends('layouts.app')

@section('content')

<table class="table table-hover">
  <thead>
  <!-- cambiamos los datos de las columnas -->
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Categoría Empresa</th>
      <th scope="col">Nivel de Ciberseguridad</th>
    </tr>
    <!-- crear foreach para extraer de la base de datos -->
    @foreach($users as $user)
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->apellido}}</td>
      <td>{{$user->empresa}}</td>
      <td>crítico</td>
    </tr>
    @endforeach 
    </tbody>
</table>
@endsection