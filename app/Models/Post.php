<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug', 'title', 'description', 'body', 'status', 'image_path', 'user_id', 'category_id', 'published_at'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function publishedAt(){
        return Carbon::parse($this->published_at)->format('M, d Y');
    }

    public function displayBody(){
        return Str::markdown($this->body);
    }
}
