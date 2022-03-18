<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        $data = [
            'title'     => 'Home',
            'banner'    => Banner::get(),
            'post'     => Post::with('category')->paginate(8),
            'content'   => 'home/home/index'
        ];
        return view('home/layouts/wrapper', $data);
    }
}
