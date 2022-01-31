<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Step;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

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
      
            $recipes = Recipe::with('author:id,name', 'comments')->paginate(10);

            return view('dashboard')->with(compact('recipes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $categories = Category::all();
            return view('CrudRecipe.create', compact('categories'));
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
                $validatedData = $request->validate([
                    'title' => 'required|max:190',
                    'description' => 'required',
                    'prepTime' => 'required',
                    'category_id' => 'required',
                    'image' => 'nullable'
                ]);
                
                $fileName = time().'_'.$request->file('image')->getClientOriginalName();

                $filePath = $request->file('image')->storeAs('recipes', $fileName, 'public');

                $recipe = Recipe::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'prepTime' => $request->prepTime,
                    'image' => '/storage/' . $filePath,
                    'category_id' => $request->category_id,
                    'ingredients' => $request->ingredients,
                    'author_id' => Auth::id(),
                    
                ]);

                $steps = $request->steps;
                $stepsLength = count($steps);

                for ($i=0; $i < $stepsLength; $i++) { 
                    $steps[$i] = json_decode($steps[$i], true); 
                }

                $recipe->steps()->createMany($steps);

                return redirect(route('recipes.index'));

            }catch (\Throwable $e) {
                return redirect(route('recipes.index'));

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
            $recipe::with('author')->get();

            return view('CrudRecipe.show')->with(compact('recipe'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
            $categories = Category::all();
            $totalRecipe = count($recipe->steps);
            
            return view('CrudRecipe.edit', compact('recipe', 'categories','totalRecipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
            try {

                $fileName = time().'_'.$request->file('image')->getClientOriginalName();

                $filePath = $request->file('image')->storeAs('recipes', $fileName, 'public');

                $recipe->title = $request->get('title');
                $recipe->description = $request->get('description');
                $recipe->image = '/storage/'.$filePath;
                $recipe->prepTime = $request->get('prepTime');
                $recipe->ingredients = $request->get('ingredients');
                $recipe->category_id = $request->get('category_id');
                $recipe->save();


                $steps = $request->steps;

                $stepsLength = count($steps);

                for ($i=0; $i < $stepsLength; $i++) { 
                    $steps[$i] = json_decode($steps[$i], true); 
                }

                Step::saveSteps($recipe->id, $steps);


                return redirect()->route('recipes.index');

            }catch (\Throwable $e) {
                return redirect()->route('recipes.index');

            }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
            $recipe->delete();
            return redirect()->route('dashboard');
    }
}
