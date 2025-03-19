@extends('layouts.app')
@section('content')  
  <div class="card-body">
    <h5 class="card-title">Añadir un libro</h5>
    <form method="POST" action="{{route('libros.store')}}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>        
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>        
            <input type="text" name="descripcion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor:</label>        
            <input type="text" name="autor" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="form-control">Guardar</button>
        </div>
    </form>
    @if(session('mensaje'))
        <div class="alert alert-success" role="alert">
            {{session('mensaje')}}
        </div>
    @endif  
  </div>
@endsection