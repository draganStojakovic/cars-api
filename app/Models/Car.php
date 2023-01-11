<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['brand', 'model', 'year', 'max_speed', 'is_automatic', 'engine', 'number_of_doors'];
    public static function search($term, $skip, $take)
    {
        return self::where('name', 'LIKE', '%' . $term . '%')->skip($skip)->take($take)->get();
    }
}
