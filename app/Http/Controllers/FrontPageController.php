<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Comment;

class FrontPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::with('author:id,name', 'comments.user')->paginate(10);
        $recipeMoreComments = Recipe::with('comments')->get()->sortByDesc(function($comments)
        {
            return $comments->comments->count();
        });
        // dd($postMoreComments);
        return view('home')->with(compact('recipes', 'recipeMoreComments'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        $categories = Category::All();
        return view('recipe')->with(compact('recipe', 'categories'));

    }



}
