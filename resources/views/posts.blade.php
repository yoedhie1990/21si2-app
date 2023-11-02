@extends('layouts.main')

@section('container')
    <h1>Halaman Blog</h1>

    @foreach ($posts as $post)
        <h2><a href="/blog/{{ $post['id'] }}">{{ $post['title']}}</a></h2>
        <p>{{ $post['body']}}</p>
    @endforeach

@endsection
