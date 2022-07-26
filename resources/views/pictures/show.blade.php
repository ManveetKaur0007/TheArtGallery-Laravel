@extends('master')

@section('content')

    <h1>Picture {{$picture->id}}</h1>

    ID: {{ $picture->id }}<br>
    Name: {{ $picture->name }}<br>
    Meaning behind the drawing: {{ $picture->body }}<br>
    Author ID: {{ $picture->author_id }}<br>


    <h2>Belongs to</h2>
    Gallery: {{$picture->gallery->name}}<br>
    Description: {{$picture->gallery->description}} <br><br>

    <h2>Type of Drawing:</h2>
    @foreach($picture->tags as $tag)
        {{ $tag->name }}
    @endforeach<br>

    <h2>Image</h2>
    @isset($picture->file)
        <img src="{{asset('storage/'. $picture->file) }}"
             width="300px" height="400px"><br>
    @endisset

@endsection
