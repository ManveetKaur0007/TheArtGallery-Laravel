@extends('master')
@section('content')
    <h1>Deleted Galleries</h1>
    @foreach($galleries as $gallery)
        Gallery ID: {{ $gallery->id }}<br>
        Name: {{$gallery->name}}<br>
        Description: {{$gallery->description}}<br>
        <a href="{{ action('GalleryController@restore', $gallery->id) }}">[restore]</a><br>
        <a href="{{ action('GalleryController@forceDelete', $gallery->id) }}">[Force Delete]</a><br>
        <br>
    @endforeach
@endsection
