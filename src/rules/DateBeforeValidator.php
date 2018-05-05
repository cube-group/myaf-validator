<?php

namespace MyafMyaf\Validator\Rules;
use Myaf\Validator\LValidator;
use DateTime;
use Myaf\Validator\Rule;

/**
 * Class DateBeforeValidator
 * @author chenqionghe
 * @package MyafMyaf\Validator\Rules
 */
class DateBeforeValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "日期必须在%s之前";
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
        $time = ($value instanceof DateTime) ? $value->getTimestamp() : strtotime($value);
        $beforeTime = ($params[0] instanceof DateTime) ? $params[0]->getTimestamp() : strtotime($params[0]);

        return $time < $beforeTime;
    }

}
