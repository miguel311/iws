@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4>Crear Nuevas Cotizaciones & Consultar</h4></div>
                <div class="card-body">
                {{-- Botón Crear --}}
                <a type="button" class="btn btn-info buton-icons" href="/cotizasalud/create">
                  <span style="font-size: 48px; color:white">
                    <i src="{{ asset('images/cruz.svg') }}" class="fas fa-plus-circle"></i>
                  </span>
                    <center style=" font-size: 20px; color:white">Cotización</center> 
                </a>
                {{-- mensaje de error --}}
                <div class="container my-4">
                    @if ( session('mensaje') )
                        <div class="alert alert-danger">{{ session('mensaje') }}</div>
                    @endif
                </div>
                {{-- Buscador --}}
                <div class="panel panel-success">
                  <form action="/cotizasalud/search" method="get">
                    <div class="panel-body">
                      <input type="text" name="search_field" class="form-control" placeholder="Ingrese cotización a Buscar">
                    </div>
                    <div class="panel-footer">
                      <button type="submit" class="btn btn-success edit-icons"><i class="fa fa-search"></i></button>
                    </div><br>
                  </form>
                </div>
                {{-- Tabla --}}
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

                          <a href="{{route('cotizasalud.show', $item)}}" class="btn btn-success btn-sm edit-icons"><i class="fa fa-search-plus"></i></a>
                          <a href="{{route('cotizasalud.print', $item)}}" class="btn btn-warning btn-sm edit-icons"><i class="fa fa-print"></i></a>
                         {{-- <a href="" class="btn btn-warning btn-sm">Editar</a>--}}
                          <a href="{{route('cotizasalud.delete', $item)}}" class="btn btn-danger btn-sm edit-icons" onclick="return confirm('estas seguro')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach()
                  </tbody>
                </table>
                {{$integrities->links()}}{{-- Paginador --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection