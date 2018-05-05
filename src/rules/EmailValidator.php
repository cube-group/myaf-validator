<?php

namespace MyafMyaf\Validator\Rules;

use Myaf\Validator\LValidator;
use Myaf\Validator\Rule;

/**
 * Class EmailValidator
 * @author chenqionghe
 * @package MyafMyaf\Validator\Rules
 */
class EmailValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}是无效邮箱, 非法值{value}";
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
        return filter_var($value, \FILTER_VALIDATE_EMAIL) !== false;
    }
}
