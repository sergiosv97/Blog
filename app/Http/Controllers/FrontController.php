<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Noticia;

class FrontController extends Controller
{
    //public function index() {
     //   $posts = Post::orderBy('id','DESC')->paginate(4);
    //    return view('frontend', compact('posts'));
  //  }

   // public function post($slug)
  //  {
   //     $post = Post::where('slug', $slug)->first();
   //     return view('post',compact('post'));
   // }

    public function index() {
        $noticias = Noticia::orderBy('id','DESC')->paginate(4);
        return view('frontend', compact('noticias'));
    }

    public function noticia($titulo)
    {
        $noticia = Noticia::where('titulo', $titulo)->first();
        return view('noticia',compact('noticia'));
    }
}
