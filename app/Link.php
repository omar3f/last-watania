<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    protected $fillable = ['link', 'title', 'parent_id', 'visibility', 'sort'];

    public function scopeVisible($query) {
        return $query->where('visibility', '1');
    }
    public function scopeParents($query) {
        return $query->where('parent_id', '=' , 0);
    }
    public function scopeChildren($query, $id) {
        return $query->where('parent_id', '=' , $id);
    }
    public function getVisibleChildren() {
        return $this->children($this->id)->orderBy('sort')->visible()->get();
    }
}
