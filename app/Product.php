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


    public function sub_images() {
        return (new \App\Gallery)->where('resource', 'product')->where('resource_id', $this->id)->get();
    }
}
