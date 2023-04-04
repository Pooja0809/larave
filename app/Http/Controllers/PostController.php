<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $data = Post::get();
       // return $data;    //API created....

        return view('user.index', compact('data'));
    }
}
