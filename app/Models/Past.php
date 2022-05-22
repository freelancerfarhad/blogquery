<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\imagefile;
class Past extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function pasts()
    {
        return $this->morphOne(imagefile::class,'imageable');
    }
}
