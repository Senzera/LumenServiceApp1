<?php

namespace App\Http\Controllers;

use App\Models\Users;

class UsersController extends Controller
{
    public function index()
    {
        $posts = Users::OrderBy("id", "DESC")->paginate(10);

        $output = [
            "message" => "posts",
            "results" => $posts
        ];

        return response()->json($posts, 200);
    }
}