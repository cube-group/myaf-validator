<?php

namespace Myaf\Validator\Rules;

use Myaf\Validator\Validator;
use Myaf\Validator\Rule;

/**
 * Class NumericValidator
 * @author chenqionghe
 * @package Myaf\Validator\Rules
 */
class NumericValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}只能是数字";
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
        return is_numeric($value);
    }

}
