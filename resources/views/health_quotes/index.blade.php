@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4>Crear Nuevas Cotizaciones & Consultar</h4></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                {{-- Botón Crear --}}
                                <a type="button" class="btn btn-info" href="{{ route('cotiza-salud.create') }}">
                                  <span style="font-size: 48px; color:white">
                                    <i src="{{ asset('images/cruz.svg') }}" class="fas fa-plus-circle"></i>
                                  </span>
                                    <center style=" font-size: 20px; color:white">Cotización</center> 
                                </a>
                            </div>
                            <div class="col-md-10">
                                <health-quote-list
                                    route_list="{{ url('cotiza-salud/vue-list') }}"
                                    route_edit="{{ url('cotiza-salud/edit/{id}') }}"
                                    route_delete="{{ url('cotiza-salud/delete') }}">
                                </health-quote-list>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection