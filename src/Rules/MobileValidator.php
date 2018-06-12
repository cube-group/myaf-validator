<?php

namespace Myaf\Validator\Rules;

use Myaf\Validator\Validator;
use Myaf\Validator\Rule;

/**
 * Class MobileValidator
 * @author chenqionghe
 * @package Myaf\Validator\Rules
 */
class MobileValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}不是有效的手机号码";
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
        return preg_match('/^(\+?86-?|0)?1[0-9]{10}$/', $value);
    }
}
