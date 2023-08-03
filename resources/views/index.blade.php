@extends('layout')
@section('title', 'Conference List')
@section('content')
    <div class="container">
        <h1 class="display-4">Welcome to the Conference List</h1>

        <ul class="list-group">
    @foreach($conferences as $conference)
        <h1>{{$conference['name']}}</h1>
        <p>{{$conference['description']}}</p>
        <p>{{$conference['location']}}</p>
        <p>{{$conference['start_date']}}</p>
        <p>{{$conference['end_date']}}</p>
        <br>
    @endforeach
        </ul>
    </div>
@endsection
