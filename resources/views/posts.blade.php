@extends('layouts.master')

@section('content')

    @foreach ($posts as $post)
         <article>
            <h2>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->excerpt }}</p>
         </article>
    @endforeach

@endsection

