@extends('master')
@section('content')
    <h1>All Galleries</h1>
    @foreach($galleries as $gallery)
        Id: {{ $gallery->id }}<br>
        Name: {{$gallery->name}}<br>
        Description: {{$gallery->description}}<br>
        <a href="{{ action('GalleryController@edit', $gallery->id) }}">[edit]</a><br>
        <form method="post" action="{{action ('GalleryController@destroy', $gallery->id) }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <input type="submit" value="Delete">
        </form>
        <br>
    @endforeach
    {{ $galleries->links() }}
@endsection
