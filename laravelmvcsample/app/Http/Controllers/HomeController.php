<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        //return 'mensaje';
        $registros = Post::all();
        return view( 'home' ) -> with( 'peliculas' , $registros);
    }
}
