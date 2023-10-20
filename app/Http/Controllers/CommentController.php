<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $posts = Comment::OrderBy("id", "DESC")->paginate(10);

        $output = [
            "message" => "posts",
            "results" => $posts
        ];

        return response()->json($posts, 200);
    }
}