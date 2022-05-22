<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Tags;
class Video extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function comments()
    {
        return $this->morphMany(Comment::class,'videoable');
    }
    public function tags()
    {
        return $this->morphToMany(Tags::class,'taggable');
    }

}
