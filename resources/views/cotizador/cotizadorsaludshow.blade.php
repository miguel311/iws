@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4>Detalle de Cotización de Prevención N° {{ $show->id }}</h4></div>
                {{-- CONTRATANTE --}}
                <div class="card-header">
                  <h3><div  class="btn btn-info print-icons">
                      <i class="fas fa-user-alt"></i>
                  </div> Contratante</h3>
                    <h5>Nombre: {{ $show->name }} {{ $show->last_name }}</h5>
                    <h5> Cédula: {{ $show->cedule_type }} {{ $show->cedule }}</h5>
                    <h5> Teléfono Local: {{ $show->phone_local_type }} {{ $show->phone_local }}</h5>
                    <h5> Teléfono Celular: {{ $show->phone_movile_type }} {{ $show->phone_movile }}</h5>
                    <h5> Email: {{ $show->email }}</h5>
                    <h5> Resguardo: {{ $show->suma }}</h5>
                </div>
                {{-- PLAN --}}
                <div class="card-header">
                  <h3><div class="btn btn-info print-icons">
                      <i class="fas fa-book-open"></i>
                  </div> Plan Seleccionado</h3>
                    <h5>Nombre del Plan: {{ $planes->name }}</h5>
                    <h5>Descripción: {{ $planes->description }}</h5>
                    <h5>Resguardo: {{ $planes->coverage }}</h5>
                    <h5>Precio del plan: {{ $planes->price }}</h5>
                </div>
                {{-- lista de resguardados --}}
                <div class="card-header">
                  <h3><div class="btn btn-info print-icons">
                      <i class="fas fa-user-shield "></i>
                  </div> Resguardados</h3>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Nombre</th>
                          <th scope="col">Apellido</th>
                          <th scope="col">Sexo</th>
                          <th scope="col">Fecha de Nacimiento</th>
                          <th scope="col">Parentesco</th>
                          <th scope="col">Maternidad</th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- RECORRRE LA LISTA DE REGUARDADOS --}}
                        @foreach($resguardados as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                          <td>{{ $item->last_name }}</td>
                          <td>{{ $item->sexo }}</td>
                          <td>{{ $item->date }}</td>
                          <td>{{ $item->parent }}</td>
                          @if($item->mother)<td>Si</td>@else<td>No</td>@endif
                        </tr>
                        @endforeach()
                      </tbody>
                    </table>
                      {{-- Crear Nueva cotización --}}
                      <a type="button" class="btn btn-info buton-icons" href="/cotizasalud/create">
                        <span style="font-size: 48px; color: white">
                          <i class="fas fa-plus-circle"></i>
                        </span>
                          <center style=" font-size: 20px; color:white">Nueva</center>
                      </a>
                      {{-- Imprimir cotización --}}
                      <a type="button" class="btn btn-info buton-icons" href="{{route('cotizasalud.print', $show->id)}}">
                        <span style="font-size: 48px; color: white">
                          <i class="fas fa-print"></i>
                        </span>
                          <center style=" font-size: 20px; color:white">Imprimir</center>
                      </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection











