<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personaController extends Controller
{
    public function index($post, $comment){
        return view('posteo', compact('post', 'comment'));
        // return view('posteo', [
        // 'post'      => $post,
        // 'comment'   => $comment
        // ]);
    }
}
