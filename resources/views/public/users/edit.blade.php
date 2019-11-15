@extends('layouts.app')

@section('content')

    <form method="post" action="{{ route('appointments.store', ['id' => $user->id]) }}" >
    @csrf
    <input type="text" name="userTitle" value="{{ $user->title }}" placeholder="Title"><br>
    <textarea name="userDescription" cols="20" rows="3" placeholder="Description">{{ $user->description }}</textarea><br>
    <input type="submit" value="Store">
    </form>

@endsection
