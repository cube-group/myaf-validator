<?php

namespace Myaf\Validator\Rules;

use Myaf\Validator\Validator;
use DateTime;
use Myaf\Validator\Rule;

/**
 * Class DateAfterValidator
 * @author chenqionghe
 * @package Myaf\Validator\Rules
 */
class DateAfterValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}日期必须在%s之后, 非法值{value}";
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
        $time = ($value instanceof DateTime) ? $value->getTimestamp() : strtotime($value);
        $afterTime = ($params[0] instanceof DateTime) ? $params[0]->getTimestamp() : strtotime($params[0]);
        return $time > $afterTime;
    }

}
