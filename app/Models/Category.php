<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory , HasTranslations;

    public $fillable = [
        "name" ,
        "slug" ,
        "description" ,
        "image"
    ];

    public $translatable = ['name' , 'slug' , 'description'];

    public function setImageAttribute($value){
        $this->attributes['image'] = "admin/images/categories/" . $value;
    }
}
