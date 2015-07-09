@extends('template')

@section('content')

<h1>Blog Index</h1>

    @foreach($posts as $post)
        <div><b>{{ $post['nome'] }}:</b> {{ $post['texto'] }}</div>
    @endforeach


@stop
