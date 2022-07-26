@extends('master')

@section('content')
    <h1>New Picture</h1>

    <form method="POST" action=" {{ action('PictureController@store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="name">Name:</label>
        <input name="name" type="text"><br><br>

        <label for="body">Body:</label>
        <input name="body" type="text"><br><br>

        <label for="gallery_id">Gallery:</label>
        <select name="gallery_id">
            @foreach($galleries as $id => $gallery)
                <option value="{{$id}}">{{$gallery}}</option>
            @endforeach
        </select><br><br>

        <label for="tags">Type of Drawings:</label>
        <select multiple name="tags[]">
            @foreach($tags as $id => $tag)
                <option value="{{$id}}">{{$tag}}</option>
            @endforeach
        </select><br><br>

        <label for="file">File:</label>
        <input type="file" name="file" accept="image/*">

        <br><br>
        <input type="submit" value="Create"><br>
    </form>

@endsection
