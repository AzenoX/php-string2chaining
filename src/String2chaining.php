<?php

namespace Azenox;

class String2chaining
{
    /**
     * @param mixed $object
     * @param string $str
     * @return mixed
     */
    public static function parse($object, string $str)
    {
        return array_reduce(explode('->', $str), function ($obj, $method) {
            // If condition is true then it's a property
            if (strpos($method, '(') === false) {
                if (!$obj) return null;
                return $obj->$method;
            } else { // Else it's a method
                preg_match('/\((.*?)\)/', $method, $matches);
                $arguments = explode(',', $matches[1]);
                $method = explode('(', $method)[0];
                return $obj->$method(...$arguments);
            }
        }, $object);
    }
}