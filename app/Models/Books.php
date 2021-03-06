<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
class Books extends Model
{
    // use HasFactory;
    protected $guarded=[];

    public function authors()
    {
      return  $this->belongsToMany(Author::class,'author_book','author_id','book_id');
      
    }
}
