@extends('template')

@section('content')
    <h1>Blog</h1>

    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <h2>Comments</h2><br>
        @foreach($post->comments as $comment)
            <b>Nome: </b>{{ $comment->name }}<br>
            <b>Comment: </b>{{ $comment->comment }}
        @endforeach
        <hr>
    @endforeach

@endsection