@extends('layouts.main-layout')
@section('content')

    <h1>Show</h1>
    <h3>{{$comic -> title}}</h3>
    <h3>{{$comic -> subtitle}}</h3>
    <h3>{{$comic -> release_date}}</h3>

@endsection