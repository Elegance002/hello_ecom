<?php

namespace App\Models;

use App\Models\Attribute;
use Illuminate\Database\Eloquent\Model;

class AttributeTranslation extends Model
{
    protected $fillable = ['name', 'attribute_id'];

    public function attribute(){
        return $this->belongsTo(Attribute::class);
    }
}
