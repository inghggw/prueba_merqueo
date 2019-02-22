@extends('layouts.app')
@section('title','Importar CSV')

@section('content')
  
  <h3 class="text-primary">Importar CSV</h3>
  
  <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ route('importar.csv') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif

    <input type="file" name="importar_csv" />
    <button class="btn btn-primary">Importar CSV</button>
</form>
    
@endsection