<?php

namespace MyafMyaf\Validator\Rules;

use Myaf\Validator\LValidator;
use Myaf\Validator\Rule;

/**
 * Class RegexValidator
 * @author chenqionghe
 * @package MyafMyaf\Validator\Rules
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
     * @param LValidator $validator
     * @return bool
     */
    public static function validate($field, $value, $params = [], LValidator $validator)
    {
        return preg_match($params[0], $value);
    }

}
