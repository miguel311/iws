@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4>Cotizador de Salud</h4></div>
                <div class="card-body">
                    <health-quote-form
                        :health_quote_id="{!! (isset($healthQuote)) ? $healthQuote->id : "null" !!}"
                        route_list='{{ url('cotiza-salud') }}'>
                    <health-quote-form/>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection