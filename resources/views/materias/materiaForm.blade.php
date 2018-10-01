@extends('layouts.tema')
@section('contenido')
<div class="row">
  <div class="col-md-12 tile">
    
      <form action="{{ action('MateriaController@store') }}" method="POST">   
        {{ csrf_field() }}
          <div class="form-group">
              <label for="nombre_materia">Materia</label>
              <input name="nombre_materia" class="form-control" type="text"  placeholder="Escriba nombre de materia"><small class="form-text text-muted" >Sus alumnos se podran inscribir a su materia.</small>
          </div>
       
        <div class="form-group">
              <label for="crn">CRN</label>
              <input name="crn" class="form-control" type="text"  placeholder="CRN/NRC">
          </div>
        <div class="form-group">
              <label for="salon">Salon</label>
              <input name="salon" class="form-control" type="text" >
          </div>
          <div class="form-group">
              <label for="hora_inicio">Hora Inicio</label>
              <input name="hora_inicio" class="form-control" type="text" >
          </div>
          <div class="form-group">
              <label for="calendario">Calendario</label>
              <input name="calendario" class="form-control" type="text" >
          </div>
        <div class="col-md-12 tile-footer">
              <button class="btn btn-primary" type="submit">Aceptar</button>
       </div>
      </form>
      
  </div>
    
  
</div>




@endsection