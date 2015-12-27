<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainData extends Model
{
    protected $table='maindata';
//    protected $fillable = array('logo','favicon','websitename','phone','mail','address');
    protected $fillable = ['key', 'value'];


    public static function findOrCreate($key){

        $model = static::where('key',$key)->first();

        return $model ?: new static;
    }

    public static function getValueByKey($key){
        $config = static::where('key',$key)->first();
        if($config)
            return $config->value;
    }

}
