@extends('layouts.main-layout')

@section('section')

  <a href="{{route('home-drinks')}}">Back</a>

  <h1>Drinks name: {{$drink -> name}}</h1>

  <h3>Gradation: {{$drink -> gradation}}%</h3>

  <h3>Price: {{$drink -> price}}$</h3>

@endsection