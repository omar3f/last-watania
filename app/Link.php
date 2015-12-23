<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    protected $fillable = ['link', 'title', 'parent_id', 'visibility', 'sort'];
}
