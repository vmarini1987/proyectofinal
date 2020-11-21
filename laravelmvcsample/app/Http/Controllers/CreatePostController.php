<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CreatePostController extends Controller
{
  public function index() {
      return view( 'createpost' );
  }

  public function store(Request $request) {
    //Post::create($request->all());
    $nombreArchivo = $request->cover_name->getClientOriginalName();
    Post::create($request->except(['cover_name']) + ['cover_name'=>$nombreArchivo]);
    // $record=new Post();
    // $record->save($request->all());
    
    $request->cover_name->storeAs('public/covers', $request->cover_name->getClientOriginalName());
    return redirect('/');
  }
  // $this->validate($request, [
  //   'title' => 'required|unique:posts|max:255',
  //   'body' => 'required',
  // ]);
}
