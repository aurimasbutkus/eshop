<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'description', 'specification', 'config', 'category', 'quantity', 'status'];

    public static function categories()
    {
        return DB::table('products')
            ->distinct('category')
            ->pluck('category');
    }

    public static function active()
    {
        return self::where('status', 'active')->get();
    }
}
