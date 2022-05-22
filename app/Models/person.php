<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\imagefile;
class person extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function images()
    {
        return $this->morphOne(imagefile::class,'imageable');
    }
}
