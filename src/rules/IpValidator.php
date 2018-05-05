<?php

namespace MyafMyaf\Validator\Rules;

use Myaf\Validator\LValidator;
use Myaf\Validator\Rule;

/**
 * Class IpValidator
 * @author chenqionghe
 * @package MyafMyaf\Validator\Rules
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
     * @param LValidator $validator
     * @return bool
     */
    public static function validate($field, $value, $params = [], LValidator $validator)
    {
        return filter_var($value, \FILTER_VALIDATE_IP) !== false;
    }
}
