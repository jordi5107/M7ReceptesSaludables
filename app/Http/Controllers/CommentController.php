<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Comment::create([
                'comment' => $request->comentari,
                'recipe_id' => $request->recipeId,
                'user_id' => Auth::id(),
                
            ]);
    
            return redirect()->back();
        } catch (\Throwable $e) {
        }  
  
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Comment::where('id', $id)->delete();
        return back();
    }
}
