@extends('layouts.main-layout')

@section('section')
    <h1>DRINKS</h1>  
    <a href="{{route('drinks-create')}}">Insert a new drink</a>

    <ol>
        @foreach ($drinks as $drink)
            <li>
                <a href="{{route('drinks-show', $drink -> id)}}">
                    {{$drink -> name}}
                </a>
                <a href="{{route('drinks-edit', $drink -> id)}}">
                    EDIT
                </a>
                <a href="{{route('drinks-delete', $drink -> id)}}">
                    DELETE
                </a>
            </li>
        @endforeach
    </ol>

@endsection