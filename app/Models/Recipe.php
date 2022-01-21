<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;


    protected $fillable = [
        'title', 
        'description',
        'prepTime',
        'image',
        'author_id',
        'category_id',
    ];

    
    public function comments(){

        return $this->hasMany(Comment::class);
    }
    
    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function author(){

        return $this->belongsTo(User::class);
    }

    


    
    
}
