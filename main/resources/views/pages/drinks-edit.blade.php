@extends('layouts.main-layout')

@section('section')

    <h1>Edit the drink data</h1>

    <form action="{{route('drinks-update', $drink -> id)}}" method="post">

        @csrf
        @method('POST')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{$drink -> name}}">
        <br>
        <label for="gradation">Gradation:</label>
        <input type="text" name="gradation" value="{{$drink -> gradation}}">
        <br>
        <label for="price">Price:</label>
        <input type="text" name="price" value="{{$drink -> price}}">
        <br>
        <input type="submit" name="" value="Invia">

    </form>

@endsection