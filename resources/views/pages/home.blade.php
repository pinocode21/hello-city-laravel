@extends('layouts.app', ['title' => 'Home'])

@section('content')
    <img src="{{asset('images/rdc_drapeau.png')}}" alt="Rdc flag" class="mt-12 rounded shadow-md h-35">

    <h2 class="mt-5 text-3xl sm:text-5xl font-semi bold text-indigo-700">
        Mboté Kinshasa !
    </h2>

    <p class="text-lg text-gray-800">
        Il est actuellement {{ date('H:i') }} minutes.
    </p>
@endsection

