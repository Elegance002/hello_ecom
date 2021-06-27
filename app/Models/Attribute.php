<?php

namespace App\Models;

use App\Models\AttributeTranslation;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable=['name','value'];

    public function attribute_translations(){
      return $this->hasMany(AttributeTranslation::class);
    }
}
