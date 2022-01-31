<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use HasFactory;
    use SoftDeletes; 


    protected $fillable = [
        'title', 
        'description',
        'prepTime',
        'image',
        'ingredients',
        'author_id',
        'category_id',
    ];

    
    public function comments(){

        return $this->hasMany(Comment::class);
    }
    
    public function steps(){

        return $this->hasMany(Step::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function author(){

        return $this->belongsTo(User::class);
    }
    
    
}
