<?php

namespace BinaryCabin\Options;

abstract class BaseOption
{
    protected $attributes = [];

    public static function get($blank = false, $attributes = [])
    {
        $optionClass = new static();
        $optionClass->attributes = $attributes;
        $array = $optionClass->getArray();
        $response = [];
        if (! empty($blank)) {
            $response[''] = $blank;
        }
        foreach ($array as $key => $arrayItem) {
            $response[$key] = $arrayItem;
        }

        return $response;
    }

    public static function checkboxes($attributes = [])
    {
        $optionClass = new static();
        $optionClass->attributes = $attributes;
        $name = '';
        if (! empty($attributes['name'])) {
            $name = $attributes['name'];
        }
        $checkedKeys = [];
        if (! empty($attributes['checked'])) {
            $checkedKeys = $attributes['checked'];
        }
        $array = $optionClass->getArray();
        $response = [];
        foreach ($array as $key => $label) {
            $checked = false;
            if (in_array($key, $checkedKeys)) {
                $checked = true;
            }
            $response[$label] = [
                'name' => $name,
                'checked' => $checked,
                'value' => $key,
            ];
        }

        return $response;
    }

    public function keysAsValues($array = [])
    {
        return array_combine($array, $array);
    }

    public function getArray()
    {
        return [];
    }
}
