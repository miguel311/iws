@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4>Planes de Salud & Funerario</h4></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            {{-- Botón Crear --}}
                            <a type="button" class="btn btn-info"  href="{{ route('plan-salud.create') }}">
                              <span style="font-size: 48px; color:white">
                                <i src="{{ asset('images/cruz.svg') }}" class="fas fa-plus-circle"></i>
                              </span>
                                <center style=" font-size: 20px; color:white">Crear Plan</center> 
                            </a>
                        </div>
                        <div class="col-md-10">
                            <health-plan-list
                                route_list="{{ url('plan-salud/vue-list') }}"
                                route_edit="{{ url('plan-salud/edit/{id}') }}"
                                route_delete="{{ url('plan-salud/delete') }}">
                            </health-plan-list>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection