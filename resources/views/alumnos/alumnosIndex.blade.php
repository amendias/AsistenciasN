@extends('layouts.tema')
@section('contenido')

<h1>
  Listado de alumnos
</h1>

<div class="row">
  <div class="col-md-12">
    <table class="table">
    <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Codigo</th>
                  <th>Carrera</th>
                </tr>
      </thead>
    <tbody>
    @foreach($alumnos as $alm)
         <tr>
                  <td>{{$alm->id}}</td>
                  <td>{{$alm->nombre}}</td>
                  <td>{{$alm->codigo}}</td>
                  <td>{{$alm->carrera}}</td>               
          </tr>
    @endforeach
    </tbody>
    
    </table>
  </div> 
</div>
@endsection