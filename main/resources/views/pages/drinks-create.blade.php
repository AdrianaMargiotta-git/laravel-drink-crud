@extends('layouts.main-layout')

@section('section')

  <a href="{{route('home-drinks')}}">Back</a>

  <h1>Insert a new drink:</h1>

  <form action="{{route('store-drinks')}}" method="post">

    @csrf
    @method('POST')

    <label for="name">Insert a name:</label>
    <input type="text" name="name" value="">
    <br>
    <label for="gradation">Insert the gradation:</label>
    <input type="text" name="gradation" value="">
    <br>
    <label for="price">Insert the price:</label>
    <input type="text" name="price" value="">
    <br>
    <input type="submit" name="" value="Salva">

  </form>

@endsection