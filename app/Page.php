<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = ['title', 'content', 'image', 'parent_id'];

    public function sections() {
        return $this->hasMany('App\Section');
    }
}
