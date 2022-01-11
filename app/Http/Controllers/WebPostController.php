<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Comment;

class WebPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('author:id,name', 'comments.user')->paginate(10);
        $postMoreComments = Post::with('comments')->get()->sortByDesc(function($comments)
        {
            return $comments->comments->count();
        });
        // dd($postMoreComments);
        return view('home')->with(compact('posts', 'postMoreComments'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $categories = Category::All();
        return view('post')->with(compact('post', 'categories'));

    }



}
