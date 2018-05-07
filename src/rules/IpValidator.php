<?php

namespace Myaf\Validator\Rules;

use Myaf\Validator\Validator;
use Myaf\Validator\Rule;

/**
 * Class IpValidator
 * @author chenqionghe
 * @package Myaf\Validator\Rules
 */
class IpValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}是无效IP地址";
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
        return filter_var($value, \FILTER_VALIDATE_IP) !== false;
    }
}
