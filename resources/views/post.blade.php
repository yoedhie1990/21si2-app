@extends('layouts.main')

@section('container')
    <h1>Halaman Blog</h1>

   
        <h2>{{ $post['title']}}</h2>
        <p>{{ $post['body']}}</p>
        <a href="/blog">kembali ke daftar blog</a>
    
@endsection
