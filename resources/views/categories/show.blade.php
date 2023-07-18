<!--TO DISPLAY CATEGORIES-->
@extends('master')
@section('', 'categories')
@section('body')
    <h1>{{ $category->name }}</h1>
    <p> {{ $category->description }}</p>

    <h1>Articles:</h1>
    @foreach($category->articles as $article)
        <p>Title: {{ $article->title }}</p>

    @endforeach


@endsection
