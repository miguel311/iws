@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <car-plan-form :commercial_plan_id="{!! (isset($commercialPlan)) ? $commercialPlan->id : "null" !!}"
                           route_list='{{ url('plan-auto') }}'>
            <car-plan-form/>
        </div>
    </div>
</div>

@endsection