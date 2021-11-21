@extends('layouts.master')

@section('content')
<h1>Ini halaman about</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="/images/{{ $image }}" alt="{{ $name }}" width="200">
@endsection
