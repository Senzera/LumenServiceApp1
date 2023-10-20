<?php

namespace App\Http\Controllers;

use App\Models\Tags;

class TagsController extends Controller
{
    public function index()
    {
        $posts = Tags::OrderBy("id", "DESC")->paginate(10);

        $output = [
            "message" => "posts",
            "results" => $posts
        ];

        return response()->json($posts, 200);
    }
}