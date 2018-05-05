<?php

namespace MyafMyaf\Validator\Rules;

use Myaf\Validator\LValidator;
use DateTime;
use Myaf\Validator\Rule;

/**
 * Class DateValidator
 * @author chenqionghe
 * @package MyafMyaf\Validator\Rules
 */
class DateValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}是无效的日期格式";
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
        if ($value instanceof DateTime) {
            return true;
        }
        return strtotime($value) !== false;
    }

}
