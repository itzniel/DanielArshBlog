<!--To create a new category-->
@extends('master')
@section('', 'articles')
@section('body')
    <h1>New Article</h1>

    <form method="POST" action="{{ action([\App\Http\Controllers\ArticleController::class, 'store'])}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="title">Title</label>
        <input name="title" type="text"><br>

        <label for="body">Body:</label>
        <input name="body" type="text"><br>


        <label for="category_id">Category</label>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select><br>

        <input type="submit" value="Create"><br>
    </form>
@endsection
