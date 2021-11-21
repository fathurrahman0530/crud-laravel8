@extends('layouts.master')

@section('content')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>

    <a href="/blog">Back To Posts</a>
@endsection