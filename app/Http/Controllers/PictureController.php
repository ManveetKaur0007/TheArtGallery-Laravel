<?php

namespace App\Http\Controllers;
use App\Picture;
use App\Gallery;
use App\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function index()
    {
        // $testing = "Passing data…";
        //$testing = 'This is my new Picture Controller';
        //$pictures = DB::table('pictures')->get();
        $pictures = Picture::paginate(7);
        return view('pictures.index', compact("pictures"));

    }

    public function show($picture)
    {
        $picture= Picture::find($picture);
        return view('pictures.show', compact("picture"));
    }
    public function create() {
        $galleries = Gallery::all()->pluck('name', 'id');
        $tags = Tag::all()->pluck('name','id');
        return view('pictures.create', compact("galleries","tags"));
    }
    public function store(Request $request) {
        $gallery = Gallery::findOrFail($request->gallery_id);
        $picture = new Picture($request->all());
        $picture->author_id = 1;
        $picture->gallery()->associate($gallery)->save();
        $picture->tags()->sync($request->tags);
        if ($request->hasFile('file') &&
            $request->file('file')->isValid()) {
            $path = $request->file->storePublicly('pictures','public');
            $picture->file = $path;
            $picture->save();
        }
        return redirect('pictures');
    }
    public function destroy(Picture $picture){
        $picture->delete();
        return redirect('pictures');
    }
    public function __construct() {
        $this->middleware('auth', ['only' => ['create', 'edit','delete']]);
    }
}
