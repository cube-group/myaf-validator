<?php

namespace Myaf\Validator\Rules;

use Myaf\Validator\Validator;
use Myaf\Validator\Rule;

/**
 * Class RegexValidator
 * @author chenqionghe
 * @package Myaf\Validator\Rules
 */
class RegexValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}格式无效";
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
        return preg_match($params[0], $value);
    }

}
