<?php

namespace MyafMyaf\Validator\Rules;

use Myaf\Validator\LValidator;
use Myaf\Validator\Rule;

/**
 * Class NumericValidator
 * @author chenqionghe
 * @package MyafMyaf\Validator\Rules
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
     * @param LValidator $validator
     * @return bool
     */
    public static function validate($field, $value, $params = [], LValidator $validator)
    {
        return is_numeric($value);
    }

}
