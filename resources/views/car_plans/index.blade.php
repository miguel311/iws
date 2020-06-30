@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4>Planes de Automóvil</h4></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            {{-- Botón Crear --}}
                            <a type="button" class="btn btn-info"  href="{{ route('plan-auto.create') }}">
                              <span style="font-size: 48px; color:white">
                                <i src="{{ asset('images/cruz.svg') }}" class="fas fa-plus-circle"></i>
                              </span>
                                <center style=" font-size: 20px; color:white">Crear Plan</center> 
                            </a>
                        </div>
                        <div class="col-md-10">
                            <car-plan-list
                                route_list="{{ url('plan-auto/vue-list') }}"
                                route_edit="{{ url('plan-auto/edit/{id}') }}"
                                route_delete="{{ url('plan-auto/delete') }}">
                            </car-plan-list>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection