<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{
    public function getPosts() {
        $post = Post::find(1);

        return $post;
    }
}
