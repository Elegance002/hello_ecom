<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id',
        'level',
        'name',
        'order_level',
        'commision_rate',
        'banner',
        'icon',
        'featured',
        'digital',
        'slug',
        'meta_title',
        'meta_description'
    ];


    public function category_translations(){
    	return $this->hasMany(CategoryTranslation::class);
    }

    public function products(){
    	return $this->hasMany(Product::class);
    }

    // public function classified_products(){
    // 	return $this->hasMany(CustomerProduct::class);
    // }

    public function categories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('categories');
    }

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }


}
