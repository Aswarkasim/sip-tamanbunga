<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomePostController extends Controller
{
    //

    function index()
    {
        $kategori_id = request('kategori_id');
        if ($kategori_id) {
            $post = Post::where('kategori_id', $kategori_id)->get();
        } else {
            $post = Post::get();
        }
        $data = [
            'title'     => 'Home',
            'post'     => $post,
            'content'   => 'home/post/index'
        ];
        return view('home/layouts/wrapper', $data);
    }
    function show($slug)
    {

        $post = Post::where('slug', $slug)->first();
        $data = [
            'title'     => 'Home',
            'post'     => $post,
            'content'   => 'home/post/detail'
        ];
        return view('home/layouts/wrapper', $data);
    }
}
