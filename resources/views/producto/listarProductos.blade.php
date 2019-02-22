@extends('layouts.app')
@section('title','Listar Productos')

@section('content')
  
  <h3 class="text-primary">Listar Productos</h3>
  <table class="table table-striped" id="tListarProductos" data-route="{{route('producto.showTable')}}">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Referencia</th>
        <th>Precio</th>
        <th>Unidades Actuales</th>
        <th>Estado</th>
      </tr>
    </thead>
  </table>
    
@endsection