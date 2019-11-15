@extends('layouts.app')

@section('content')

    <form method="post" action="{{ route('appointments.store', ['id' => $appointment->id]) }}" >
    @csrf
    <input type="text" name="appointmentTitle" value="{{ $appointment->title }}" placeholder="Title"><br>
    <textarea name="appointmentDescription" cols="20" rows="3" placeholder="Description">{{ $appointment->description }}</textarea><br>
    <input type="submit" value="Store">
    </form>

@endsection
