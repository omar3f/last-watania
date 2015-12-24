<?php
/**Takes an array of objects and creates an associative array out of it
 * You should specify the key value pairs as the second argument
 *
 * (optional) Add an array as the third argument to get it prepended to the returned array
 * (optional) Add an array as the fourth argument to get it appended to the returned array
 * @param $arr_obj
 * @param $key_val
 * @param array $prepend
 * @param array $append
 * @return array
 */

function dropdown_generator($arr_obj, array $key_val, array $prepend = [], array $append = []) {
    $new_arr = $prepend;
    foreach($arr_obj as $item) {
        foreach ($key_val as $key => $val) {
            $new_arr[$item[$key]] = $item[$val];

        }
    }
    foreach ($append as $append_key => $append_val) {
        $new_arr[$append_key] = $append_val;

    }
    return $new_arr;

}