<?php

namespace MyafMyaf\Validator\Rules;

use Myaf\Validator\LValidator;
use Myaf\Validator\Rule;

/**
 * Class SlugValidator
 * @author chenqionghe
 * @package MyafMyaf\Validator\Rules
 */
class SlugValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}只能包括英文字母(a-z)、数字(0-9)、破折号和下划线";
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
        return preg_match('/^([-a-z0-9_-])+$/i', $value);
    }
}
