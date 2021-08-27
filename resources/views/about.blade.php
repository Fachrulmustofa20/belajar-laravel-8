@extends('layouts.main')

@section('container')
    <h1>Ini halaman About</h1>
    <h2>{{ $name }}</h2>
    <p>{{ $email }}</p>
    <img src="./images/{{ $image }}" alt="human">    
@endsection
