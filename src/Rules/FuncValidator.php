<?php

namespace Myaf\Validator\Rules;

use Myaf\Validator\Validator;
use Myaf\Validator\Rule;

/**
 * Class FuncValidator
 * @author chenqionghe
 * @package Myaf\Validator\Rules
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
     * @param Validator $validator
     * @return bool
     */
    public static function validate($field, $value, $params = [], Validator $validator)
    {
        $funcName = array_shift($params);
        return call_user_func($funcName, $value);
    }

}
