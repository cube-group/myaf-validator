<?php

namespace MyafMyaf\Validator\Rules;

use Myaf\Validator\LValidator;
use Myaf\Validator\Rule;

/**
 * Class BoolValidator
 * @author chenqionghe
 * @package MyafMyaf\Validator\Rules
 */
class BoolValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return '{field}必须是布尔值';
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
        return is_bool($value);
    }

}
