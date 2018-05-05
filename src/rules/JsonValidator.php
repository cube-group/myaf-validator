<?php

namespace MyafMyaf\Validator\Rules;

use Myaf\Validator\LValidator;
use Myaf\Validator\Rule;

/**
 * Class JsonValidator
 * @author chenqionghe
 * @package MyafMyaf\Validator\Rules
 */
class JsonValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}不是合法的json结构";
    }

    /**
     * @param $field
     * @param $value
     * @param array $params
     * @param LValidator $validator
     * @return mixed
     */
    public static function validate($field, $value, $params = [], LValidator $validator)
    {
        return is_array(json_decode($value, true));
    }

}
