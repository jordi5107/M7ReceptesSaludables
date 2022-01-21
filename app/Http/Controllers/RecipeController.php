<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;

use Auth;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
            $recipe = Recipe::with('author:id,name', 'comments')->paginate(10);

            return view('dashboard')->with(compact('recipe'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::User()->current_team_id != 1){
            return false;
            
        }else{
            $categories = Category::all();
            return view('CrudPosts.create', compact('categories'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::User()->current_team_id != 1){
            return false;
            
        }else{
            try {

                $validatedData = $request->validate([
                    'title' => 'required|unique:posts|max:190',
                    'content' => 'required',
                    'image' => 'required',
                    'category_id' => 'required',
                ]);
                
                
                Post::create([
                    'title' => $request->title,
                    'content' => $request->content,
                    'image' => $request->image,
                    'category_id'=> $request->category_id,
                    'author_id' => Auth::id(),
                    
                ]);

                return redirect(route('recipes.index'));

            }catch (\Throwable $e) {
                return redirect(route('recipes.index'));

            } 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        if (Auth::User()->current_team_id != 1){
            return false;
            
        }else{
            $post::with('author')->get();

            return view('CrudPosts.show')->with(compact('post'));

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if (Auth::User()->current_team_id != 1){
            return false;
            
        }else{
            $categories = Category::all();

            return view('CrudPosts.edit', compact('post', 'categories'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if (Auth::User()->current_team_id != 1){
            return false;
            
        }else{
            try {
                $post->title = $request->get('title');
                $post->content = $request->get('content');
                $post->image = $request->get('image');
                $post->category_id = $request->get('category_id');
                $post->save();

                return redirect('/posts');

            }catch (\Throwable $e) {
                return redirect(route('posts.index'));

            }  
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (Auth::User()->current_team_id != 1){
            return false;
            
        }else{
            $post->delete();
            return redirect('/posts');
        }
    }
}
