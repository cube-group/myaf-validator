<?php

namespace Myaf\Validator\Rules;

use Myaf\Validator\Validator;
use Myaf\Validator\Rule;

/**
 * Class CompareValidator
 * @author chenqionghe
 * @package Myaf\Validator\Rules
 */
class CompareValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}必须%s%s";
    }

    /**
     * @param $field
     * @param $value
     * @param array $params
     * @param Validator $validator
     * @return mixed
     */
    public static function validate($field, $value, $params = [], Validator $validator)
    {
        $operator = $params[0];
        $compareValue = $params[1];
        switch ($operator) {
            case '==':
                return $value == $compareValue;
            case '===':
                return $value === $compareValue;
            case '!=':
                return $value != $compareValue;
            case '!==':
                return $value !== $compareValue;
            case '>':
                return $value > $compareValue;
            case '>=':
                return $value >= $compareValue;
            case '<':
                return $value < $compareValue;
            case '<=':
                return $value <= $compareValue;
            default:
                return false;
        }
    }
}
