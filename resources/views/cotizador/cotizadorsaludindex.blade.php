@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4>Consulta de Cotizaciones</h4></div>
                <div class="card-body">
{{--                 @foreach ($plan as $item)
                    <div class="card-header">{{ $item->name }}</div>
                @endforeach --}}
                
                <a type="button" class="btn btn-info" href="/cotizasalud/create">
                    <img style="" src="{{ asset('images/cruz.svg') }}" width="164" height="90" class="d-inline-block align-top" alt=""><center>Crear Cotización</center> 
                </a>

                <div class="container my-4">
                    @if ( session('mensaje') )
                        <div class="alert alert-danger">{{ session('mensaje') }}</div>
                    @endif
                </div>

                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">N°</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido</th>
                      <th scope="col">Cedula</th>
                      <th scope="col">Email</th>
                      <th scope="col">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($integrities as $item)
                    <tr>
                      <th scope="row">{{ $item->id }}</th>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->last_name }}</td>
                      <td>{{ $item->cedule }}</td>
                      <td>{{ $item->email }}</td>
                      <td>
                          <a href="{{route('cotizasalud.show', $item)}}" class="btn btn-success btn-sm">Ver</a>

                          <a href="" class="btn btn-warning btn-sm">Editar</a>
                         {{--  <a href="{{route('cotizasalud.destroy', $item)}}" class="btn btn-danger btn-sm" onclick="return confirm('estas seguro')">Eliminar</a>
                        --}}
                    <form action="{{route('cotizasalud.destroy', $item)}}" class="d-inline" method="POST">
                        @method('DELETE')
                         @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('estas seguro')">Eliminar</button>
                    </form> 
                      </td>
                    </tr>
                    @endforeach()
                  </tbody>
                </table>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection