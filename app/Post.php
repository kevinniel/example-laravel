<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = [
    	"name",
    	"content",
    	"category_id"
    ];

    public function category()
    {
    	return $this->belongsTo(Category::class, 'category_id');
    }
}
