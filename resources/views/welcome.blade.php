@extends('layouts.app')
@section('title','Bienvenido')

@section('content')

    <div class="card text-center">
      <div class="card-header">
        Bienvenido
      </div>
      <div class="card-body">
        <h5 class="card-title">Prueba Backend Merqueo</h5>
        <p class="card-text">Mi nombre es Henry Giovanny Gonzalez Waltero, a continuación haga clic en "Listar Productos" o "Importar CSV":
        <a class="nav-link" href="{{ route('listarProductos') }}">
            <button type="button" class="btn btn-info btn-lg"><i class="fas fa-list-ol"></i> Listar Productos</button></a>
        <a class="nav-link" href="{{ route('importar') }}">
            <button type="button" class="btn btn-info btn-lg"><i class="fas fa-list-ol"></i> Importar CSV</button></a>
      </div>
      <div class="card-footer text-muted">
        22/02/2019
      </div>
    </div>
@endsection