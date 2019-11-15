@extends('layouts.app')

@section('content')
    <h2>{{ $user->name }}</h2>

    @foreach($appointments as $appointment)
        <a href="{{ route('appointments.edit', $appointment->id) }}">{{ $appointment->title }}</a>
        <a href="{{ route('appointments.destroy', ['id' => $appointment->id]) }}">del</a><br>
        <hr>
    @endforeach

@endsection
