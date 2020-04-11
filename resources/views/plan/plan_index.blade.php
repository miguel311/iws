@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4>Planes de Salud & Funerario</h4></div>
                <div class="card-body">

                {{-- Botón Crear --}}
                <a type="button" class="btn btn-info buton-icons" data-toggle="modal" data-target="#create">
                  <span style="font-size: 48px; color:white">
                    <i src="{{ asset('images/cruz.svg') }}" class="fas fa-plus-circle"></i>
                  </span>
                    <center style=" font-size: 20px; color:white">Crear Plan</center> 
                </a>   


                {{-- mensaje de error --}}
                <div class="container my-4">
                    @if ( session('mensaje') )
                        <div class="alert alert-danger">{{ session('mensaje') }}</div>
                    @elseif ( session('mensajefine') )
                        <div class="alert alert-success">{{ session('mensajefine') }}</div>
                    @endif
                </div>
                {{-- modal --}}
                <div class="modal fade" id="create">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span>×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('plan_salud.store') }}" method="POST">
                                    @csrf
                                    <div class="panel-body">
                                        <h4>Crear Nuevo Plan de Salud & Funerario</h4>
                                        <input required="" type="text" name="name" class="form-control" placeholder="Nombre del plan"><br>
                                        <input required="" type="text" name="descrip" class="form-control" placeholder="Descripción del plan"><br>
                                        <input required="" type="number" name="suma" class="form-control" placeholder="Suma a Resguardar"><br>
                                        <input required="" type="number" name="costo" class="form-control" placeholder="Costo del Plan"><br>
                                        <input required="" type="number" name="dedu" class="form-control" placeholder="Deducible Permitido">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary edit-icons"><i class="fa fa-save"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Buscador --}}
                <div class="panel panel-success">
                  <form action="/plan_salud/search" method="get">
                    <div class="panel-body">
                      <input type="text" name="search_field" class="form-control" placeholder="Ingrese Plan a Buscar">
                    </div>
                    <div class="panel-footer">
                      <button type="submit" class="btn btn-success edit-icons"><i class="fa fa-search"></i></button>
                    </div><br>
                  </form>
                </div>
                {{-- tabla --}}
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">N°</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Descripción</th>
                      <th scope="col">Cobertura</th>
                      <th scope="col">Precio</th>
                      <th scope="col">Deducible Permitido</th>
                      <th scope="col">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($plan as $item)
                    <tr>
                      <th scope="row">{{ $item->id }}</th>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->description }}</td>
                      <td>{{ $item->coverage }}</td>
                      <td>{{ $item->price }}</td>
                      <td>{{ $item->deductible }}</td>

                      <td>
                        {{-- Eliminar --}}
                        <form action="{{route('plan_salud.destroy', $item)}}" class="d-inline" method="POST">
                            @method('DELETE')
                             @csrf
                            <button type="submit" class="btn btn-danger btn-sm edit-icons" onclick="return confirm('estas seguro')"><i class="fa fa-trash"></i></button>
                        </form> 
                      </td>
                    </tr>
                    @endforeach()
                  </tbody>
                </table>
                {{$plan->links()}}{{-- Paginador --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection