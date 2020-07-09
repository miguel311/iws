@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <health-quote-form
                :health_quote_id="{!! (isset($healthQuote)) ? $healthQuote->id : "null" !!}"
                route_list='{{ url('cotiza-salud') }}'>
            <health-quote-form/>
        </div>
    </div>
</div>

@endsection