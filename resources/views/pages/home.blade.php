@extends('layouts.main-layout')
@section('content')
    <h1>Main</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{route("show", $comic -> id)}}">    
                    {{$comic -> title}} - {{$comic -> release_date}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection