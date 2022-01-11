<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'title', 
        'content',
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
