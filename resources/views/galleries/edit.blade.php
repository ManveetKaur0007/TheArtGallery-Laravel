@extends('master')


@section('content')
    <h1>Edit Gallery Form</h1>

    <form method="POST" action="
        {{ action('GalleryController@update', $gallery->id) }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        @include('partials.galleriesForm',
        ['buttonName' => 'Update',
        'name' => $gallery->name,
        'description'=>$gallery->description])
    </form>
    @include('partials.errors')
@endsection

