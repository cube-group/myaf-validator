<?php

namespace Myaf\Validator\Rules;

use Myaf\Validator\Validator;
use Myaf\Validator\Rule;

/**
 * Class LengthValidator
 * @author chenqionghe
 * @package Myaf\Validator\Rules
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
     * @param Validator $validator
     * @return bool
     */
    public static function validate($field, $value, $params = [], Validator $validator)
    {
        return CompareValidator::validate($field, mb_strlen($value), $params, $validator);
    }
}
