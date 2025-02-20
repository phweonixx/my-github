<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{
    public function getFirstPublishedPost() {
        $publishedPost = Post::where('is_published', 1)->first();

        return $publishedPost;
    }

    public function getFirstUnpublishedPost() {
        $unpublishedPost = Post::where('is_published', 0)->first();

        return $unpublishedPost;
    }

    public function getAllPosts() {
        $allPosts = Post::where('is_published', 1)->get();

        $postsTitles = [];
        foreach ($allPosts as $post) {
            array_push($postsTitles, $post->title);
        }

        return $postsTitles;
    }
}
