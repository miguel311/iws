@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><h4>Cotizador de Salud</h4></div>
                <div class="card-body">
{{--                 @foreach ($plan as $item)
                    <div class="card-header">{{ $item->name }}</div>
                @endforeach --}}
                    <cotiza-salud><cotiza-salud/>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection