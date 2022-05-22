<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Video;
class Tags extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function videos()
    {
        return $this->morphedByMany(Video::class,'taggable');
    }
    // public function getRouteKeyName()
    // {
    //     return 'tags';
    // }
}
