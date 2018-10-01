@extends('layouts.tema')
@section('contenido')

<h1>
  Listado de materias
</h1>

<div class="row">
  <div class="col-md-12">
    <table class="table">
    <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre materia</th>
                  <th>CRN</th>
                  <th>Salon</th>
                  <th>Hora Inicio</th>
                  <th>Calendario</th>
                </tr>
      </thead>
    <tbody>
    @foreach($materias as $mat)
         <tr>
                  <td>{{$mat->id}}</td>
                  <td>{{$mat->nombre_materia}}</td>
                  <td>{{$mat->crn}}</td>
                  <td>{{$mat->salon}}</td>
                  <td>{{$mat->hora_inicio}}</td>
                  <td>{{$mat->calendario}}</td>
          </tr>
    @endforeach
    </tbody>
    
    </table>
  </div> 
</div>
@endsection