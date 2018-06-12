<?php

namespace Myaf\Validator\Rules;

use Myaf\Validator\Validator;
use Myaf\Validator\Rule;

/**
 * Class DiffValidator
 * @author chenqionghe
 * @package Myaf\Validator\Rules
 */
class DiffValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}必须和%s不同";
    }

    /**
     * @param $field
     * @param $value
     * @param array $params
     * @param Validator $validator
     * @return bool
     */
    public static function validate($field, $value, $params = [], Validator $validator)
    {
        $field2 = $params[0];
        return $value != $validator->$field2;
    }
}
