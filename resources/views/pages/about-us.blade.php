@extends('app')

@section('title', 'About-us | ' . config('app.name'))


@section('content')
    <img src="{{asset('images/pinocode.png')}}" alt="Pinocode Dev" class="my-12 rounded-full shadow-md h-28">

    <h2 class="mb-5 text-gray-700"> 
        <span class="text-5xl sm:text-xs text-pink-500">&hearts;</span> 
        by FAC TECHNOLOGY
    </h2>

    <p class=""> 
        <a href="{{route('home')}}" class="text-indigo-500
        hover:text-indigo-700 underline">Revenir à la page d'accueil</a>
    </p>
@endsection