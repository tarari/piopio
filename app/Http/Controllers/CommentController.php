<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function store(Request $request,Post $post){
        $comment= new Comment();
        $comment->user_id= $request->user()->id;
        $comment->post_id= $post->id;
        $comment->content= $request->content;
        $comment->save();


        return redirect()->route('posts.show',$post);
    }
}
