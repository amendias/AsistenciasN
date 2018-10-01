@extends('layouts.tema')
@section('contenido')
<div class="row">
  <div class="col-md-12 tile">
    
      <form action="{{ action('AlumnoController@store') }}" method="POST">   
        {{ csrf_field() }}
          <div class="form-group">
              <label for="nombre">Nombre</label>
              <input name="nombre" class="form-control" type="text"  placeholder="Escriba nombre de alumno">
          </div>
        <div class="form-group">
              <label for="codigo">Codigo</label>
              <input name="codigo" class="form-control" type="text"  placeholder="Codigo de alumno">
          </div>
        <div class="form-group">
              <label for="carrera">Carrera</label>
              <input name="carrera" class="form-control" type="text" >
        </div>
        <div class="col-md-12 tile-footer">
              <button class="btn btn-primary" type="submit">Aceptar</button>
       </div>
      </form>
      
  </div>
    
  
</div>




@endsection