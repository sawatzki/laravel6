@extends('layouts.app')

@section('content')

    <h3>{{ $user->name }}</h3>
    <a href="{{ route('users.show.appointments', $user->id) }}">All appointments</a>
@endsection
