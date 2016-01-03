<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table='social';
    protected $fillable = array('linkedin','facebook','twitter','google','youtube');

    public static function findOrCreate($key){

        $model = static::where('key',$key)->first();

        return $model ?: new static;
    }

    public static function getValueByKey($key){
        $config = static::where('key',$key)->first();
        if($config)
            return $config->value;
    }

    public function social($socials) {
        $social_links = [];
        foreach ($socials as $social) {
            $social_row = $this->where('key', $social)->first();
            $social_links[$social] = count($social_row) ? $social_row->value : $social;
        }
        return $social_links;
    }
}
