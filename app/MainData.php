<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class MainData extends Model
{
    protected $table='maindata';
    protected $fillable = array('logo','favicon','websitename','phone','mail','address');
    public static function findOrCreate($key){
        $model = static::where('key',$key)->first();
        return $model ?: new static;
    }
    public static function getValueByKey($key){
        $config = static::where('key',$key)->first();
        if($config)
            return $config->value;
    }

    public function data($datas) {
        $data_values = [];

        foreach ($datas as $data) {
            $grabbed_data = $this->where('key', $data)->first();
            $data_values[$data] = count($grabbed_data) ? $grabbed_data->value : $data;

        }
        return $data_values;
    }
}