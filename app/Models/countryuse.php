<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
class countryuse extends Model
{
    // use HasFactory;
    protected $fillable =['name','email','phone','country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
