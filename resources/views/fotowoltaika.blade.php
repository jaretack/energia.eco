@extends('layouts.app')

@section('title', 'Fotowoltaika')

@section('content')
    <h1>Hello, {{ $active_page }}</h1>
    <p>Home content</p>

    <a href="{{ url('') }}">home</a>
    <a href="{{ url('fotowoltaika') }}">fotowoltaika</a>

    @if ($active_page === 'home')
        Aktywny home
    @elseif ($active_page === 'fotowoltaika')
        Aktywny fotowoltaika
    @endif
@endsection
