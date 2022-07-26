<?php

namespace App\Http\Controllers;
use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryRequest;

class GalleryController extends Controller
{

    public function index(){
        $galleries = Gallery::paginate(3);
        return view('galleries.index', compact("galleries"));
    }
    public function show($gallery)
    {
        $gallery = Gallery::find($gallery);
        return view('galleries.show', compact("gallery"));
    }

    public function create()
    {
        return view('galleries.create');
    }

    public function store(GalleryRequest $request)
    {
        $formData = $request->all();
        Gallery::create($formData);
        return redirect('galleries');
    }
    public function edit($gallery){
        $gallery = Gallery::findOrFail($gallery);
        return view('galleries.edit', compact("gallery"));
    }

    public function update(GalleryRequest $request, $gallery){
        $formData = $request->all();
        $gallery = Gallery::findOrFail($gallery);
        $gallery->update($formData);
        return redirect('galleries');
    }
    public function destroy(Gallery $gallery){
        $gallery->delete();
        $gallery->pictures()->delete();
        return redirect('galleries');
    }
    public function ShowDeleted () {
        $galleries = Gallery::withTrashed()->get();
        return view('galleries.manage', compact("galleries"));
    }
    public function restore($gallery) {
        Gallery::withTrashed()->where('id', $gallery)->restore();
        Gallery::findOrFail($gallery)
            ->pictures()
            ->restore();
        return redirect('galleries');
    }
    public function forceDelete($gallery) {
        Gallery::onlyTrashed()->where('id', $gallery)->forceDelete();
        return redirect('galleries');
    }
    public function __construct() {
        $this->middleware('auth', ['only' => ['create', 'edit','destroy']]);
    }
}
