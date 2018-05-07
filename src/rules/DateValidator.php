<?php

namespace Myaf\Validator\Rules;

use Myaf\Validator\Validator;
use DateTime;
use Myaf\Validator\Rule;

/**
 * Class DateValidator
 * @author chenqionghe
 * @package Myaf\Validator\Rules
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
     * @param Validator $validator
     * @return bool
     */
    public static function validate($field, $value, $params = [], Validator $validator)
    {
        if ($value instanceof DateTime) {
            return true;
        }
        return strtotime($value) !== false;
    }

}
