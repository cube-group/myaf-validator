<?php

namespace Myaf\Validator\Rules;

use Myaf\Validator\Validator;
use Myaf\Validator\Rule;

/**
 * Class IntPositiveValidator
 * @author chenqionghe
 * @package Myaf\Validator\Rules
 */
class IntPositiveValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}只能是正整数";
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
        return (bool)preg_match("/^[1-9][0-9]*$/", $value);
    }

}
