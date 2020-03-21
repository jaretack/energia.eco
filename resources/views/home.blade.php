@extends('layouts.app')

@section('title', 'Home page')

@section('content')
    <h1>Hello, {{ $active_page }}</h1>
    <p>Home content</p>

    <a href="{{ url('') }}">home</a>
    <a href="{{ url('fotowoltaika') }}">fotowoltaika</a>

    <img src="/images/partners/kpt.png">

    @if ($active_page === 'home')
        Aktywny home
    @elseif ($active_page === 'fotowoltaika')
        Aktywny fotowoltaika
    @endif
@endsection
