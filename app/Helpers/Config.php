<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 30/12/15
 * Time: 05:00 م
 */

namespace App\Helpers;


use Illuminate\Database\Eloquent\Model;

abstract class ConfigModel extends Model
{

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->key_column   = 'key';
        $this->value_column = 'value';

    }

    public function setKeyValue($key, $value) {
        $this->key_column = $key;
        $this->value_column = $value;
    }
    public function  getConfigs($configs) {
        $config_values = [];
        foreach ($configs as $config) {
            $grabbed_config = $this->where($this->key_column, $config)->firstOrFail();

            $config_values[$config] = count($grabbed_config) ? $grabbed_config[$this->value_column] : '';

        }
        return collect($config_values);

    }

    public function setConfigs($configs) {
        
    }
}