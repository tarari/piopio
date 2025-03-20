<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function posts()
    {
        $posts=Post::paginate(10);
        return view('admin.posts.index',compact('posts'));
    }
    public function users()
    {
        $users=User::all();
       
        return view('admin.users.index',compact('users'));
    }
}
