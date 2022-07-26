@extends('master')

@section('content')
    <h1>Gallery</h1>
    {{--    <h1>Gallery #{{$gallery->id}}</h1>--}}
    ID: {{ $gallery->id }}<br>
    Name: {{ $gallery->name }}<br>
    Description: {{ $gallery->description }}<br><br>
@endsection
