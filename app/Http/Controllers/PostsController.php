<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{
    public function getFirstPost() {
        $post = Post::find(1);

        return $post;
    }

    public function getAllPosts() {
        $allPosts = Post::all();

        $postsTitles = [];
        foreach ($allPosts as $post) {
            array_push($postsTitles, $post->title);
        }

        return $postsTitles;
    }
}
