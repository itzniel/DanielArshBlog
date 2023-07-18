<!--TO DISPLAY ALL ARTICLES-->
@extends('master')
@section('', 'article')
@section('body')
    <h1>All Articles</h1>
    <a href="{{ route ('articles.create') }}">Create a New Article </a>
    @foreach($articles as $article)
        <div>
            <p>ID: {{ $article->id }}</p>
            <p>Name: {{ $article->title }}</p>
            <p>Body: {{ $article->body }}</p>
    @endforeach

@endsection
