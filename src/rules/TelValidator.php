<?php

namespace MyafMyaf\Validator\Rules;

use Myaf\Validator\LValidator;
use Myaf\Validator\Rule;

/**
 * Class TelValidator
 * @author chenqionghe
 * @package MyafMyaf\Validator\Rules
 */
class TelValidator implements Rule
{
    /**
     * @return string
     */
    public static function message()
    {
        return "{field}不是有效的大陆电话";
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
        return preg_match('/(\d{4}-|\d{3}-)?(\d{8}|\d{7})/', $value);
    }

}
