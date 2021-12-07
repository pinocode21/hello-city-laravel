@extends('app')

@section('title', 'About-us | ' . config('app.name'))


@section('content')
    <p>Built with <span style="color: red">&hearts;</span> by ACACIA FAMILY TECHNOLOGY</p>

    <p>Revenir à <a href="{{route('home')}}">la page d'accueil</a></p>
@endsection