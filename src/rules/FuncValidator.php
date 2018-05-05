<?php

namespace MyafMyaf\Validator\Rules;

use Myaf\Validator\LValidator;
use Myaf\Validator\Rule;

/**
 * Class FuncValidator
 * @author chenqionghe
 * @package MyafMyaf\Validator\Rules
 */
class FuncValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}不能通过方法%s验证";
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
        $funcName = array_shift($params);
        return call_user_func($funcName, $value);
    }

}
