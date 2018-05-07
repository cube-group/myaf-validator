<?php

namespace Myaf\Validator\Rules;

use Myaf\Validator\Validator;
use Myaf\Validator\Rule;

/**
 * Class NotInValidator
 * @author chenqionghe
 * @package Myaf\Validator\Rules
 */
class NotInValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}不能在范围%s, 非法值{value}";
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
        return !InValidator::validate($field, $value, $params, $validator);
    }

}
