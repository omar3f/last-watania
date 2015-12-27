<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['title', 'description', 'image', 'page_id', 'parent_id'];

    public function products() {
        return $this->hasMany('App\Product');
    }

    public function page() {
        return $this->belongsTo('App\Page');
    }
}
