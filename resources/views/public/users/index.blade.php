@extends('layouts.app')

@section('content')

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="appointmentTitle" placeholder="title"><br>
        <textarea name="appointmentDescription" cols="20" rows="3" placeholder="description"></textarea><br>
        <input type="submit" value="store">
    </form>
    <hr>
    @foreach($users as $user)
        <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
        <a href="{{ route('users.destroy', ['id' => $user->id]) }}">del</a><br>
        <hr>
    @endforeach

@endsection
