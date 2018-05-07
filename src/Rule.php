<?php

namespace Myaf\Validator;

/**
 * Interface Rule
 * @package Myaf\Validator
 */
interface Rule
{
    /**
     * 消息模板
     *
     * @return mixed
     */
    public static function message();

    /**
     * 验证方法
     *
     * @param $field
     * @param $value
     * @param array $params
     * @param Validator $validator
     * @return mixed
     */
    public static function validate($field, $value, $params = [], Validator $validator);
}
