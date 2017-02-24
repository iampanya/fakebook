<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function create(Request $request){
      $post = new Post();
      $post->body = $request->body;
      $post->user_id = Auth::user()->getId();

      $post->save();
      return back();
    }
}
