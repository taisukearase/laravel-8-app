<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::all();
    }

    public function store($request)
    {
        $params = $request->only([
            'comment',
        ]);

        return Comment::create($params);
    }

    public function show(Comment $comment)
    {
        return $comment;
    }

    public function update($request, Comment $comment)
    {
        $params = $request->only([
            'comment',
        ]);

        return $comment->update($params);
    }

    public function destroy(Comment $comment)
    {
        return $comment->delete();
    }
}
