<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $table = 'recipeinstructions';

    protected $fillable = [
        'name', 
        'step',
        'text',
        'description',
        'photo',
        'recipe_id',
    ];

    public static function saveSteps(int $recipeId, array $steps) {
        if (!empty($steps)) {
            $data = [];
            $notDeleteIDS = [];

            foreach ($steps as $step) {
                $data[] = [
                    // 'id'            => $step['id'],
                    'step'            => $step['step'],
                    'name'          => $step['name'],
                    'text'          => $step['text'],
                    'recipe_id' => $recipeId,
                ];

                // $notDeleteIDS[] = $step['id'];
            }

            // // Borra los subtipos del tipo de reclamación excepto los que vienen en la petición
            self::where('recipe_id', $recipeId)
                ->delete();
                // ->whereNotIn('id', $notDeleteIDS)


            self::upsert([
                ...$data,
            ], ['step'], ['name'],['text']);
        }
    }

}
