<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'products_categories');
    }



    public function photo(){
        return $this->belongsTo(Photo::class);
    }

    protected $fillable = ['name', 'price', 'quantity', 'description'];

}
