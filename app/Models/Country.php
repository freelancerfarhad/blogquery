<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\countryuse;
class Country extends Model
{
    // use HasFactory;
    protected $fillable =['name','capital','currence','population'];

    public function persons()
    {
        return $this->hasMany(countryuse::class);
    }
}
