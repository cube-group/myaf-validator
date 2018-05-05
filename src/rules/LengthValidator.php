<?php

namespace MyafMyaf\Validator\Rules;

use Myaf\Validator\LValidator;
use Myaf\Validator\Rule;

/**
 * Class LengthValidator
 * @author chenqionghe
 * @package MyafMyaf\Validator\Rules
 */
class LengthValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}长度必须%s%s";
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
        return CompareValidator::validate($field, mb_strlen($value), $params, $validator);
    }
}
