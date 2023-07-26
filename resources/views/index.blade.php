@extends('layout')
@section('title', 'Conference List')
@section('content')
    @foreach($conferences as $conference)
        <h1>{{$conference['name']}}</h1>
        <p>{{$conference['description']}}</p>
        <p>{{$conference['location']}}</p>
        <p>{{$conference['start_date']}}</p>
        <p>{{$conference['end_date']}}</p>
        <br>
    @endforeach
@endsection
