@extends('layouts.app')

@section('content')

    <form action="{{ route('appointments.store') }}" method="post">
        @csrf
        <input type="text" name="appointmentTitle" placeholder="title"><br>
        <textarea name="appointmentDescription" cols="20" rows="3" placeholder="description"></textarea><br>
        <input type="submit" value="store">
    </form>
    <hr>
    @foreach($appointments as $appoitment)
        <a href="{{ route('appointments.edit', $appoitment->id) }}">{{ $appoitment->title }}</a>
        <a href="{{ route('appointments.destroy', ['id' => $appoitment->id]) }}">del</a><br>
        <hr>
    @endforeach

@endsection
