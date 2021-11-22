@extends('layouts.master')

@section('content')
    <h2>{{ $post->title }}</h2>
    <p>By. Fathur Rahman Abdullah <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p>{!! $post->body !!}</p>

    <a href="/blog">Back To Posts</a>
@endsection