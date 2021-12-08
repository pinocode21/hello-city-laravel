@extends('app')

@section('content')
    <img src="{{asset('images/rdc_drapeau.png')}}" alt="Rdc flag" srcset="">

    <h2>Mboté cher visiteur (se), bienvenu sur notre plateforme !</h2>

    <p>Il est actuellement {{ date('H:i') }} à Kinshasa.</p>
@endsection

