@extends('master')

@section('content')
    <h1>All Pictures</h1>
    @foreach($pictures as $picture)
        ID : {{$picture->id}}<br>
        Name : {{$picture->name}}<br>
        Meaning : {{$picture->body}}<br>
        Author ID : {{$picture->author_id}}<br>
        Type of Drawings:
        @foreach($picture->tags as $tag)
            {{ $tag->name }}
        @endforeach
        <br>
        <form method="post" action="{{action ('PictureController@destroy', $picture->id) }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <input type="submit" value="Delete">
        </form>
        <br>
    @endforeach

    {{ $pictures->links() }}
@endsection
