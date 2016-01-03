<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['title', 'description', 'image', 'page_id', 'parent_id', 'home'];

    public function products() {
        return $this->hasMany('App\Product');
    }

    public function page() {
        return $this->belongsTo('App\Page');
    }

    public function home_sections() {
        return $this->where('home', 1)->get();
    }
}
