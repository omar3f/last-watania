<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'image', 'section_id'];

    public function section() {
        return $this->belongsTo('App\Section');
    }

}
