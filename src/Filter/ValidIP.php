<?php
/**
 * IP验证
 *
 * User: @yaha
 * Date: 2018/10/31
 * Time: 10:37
 */

namespace Phpno1\Algorithm\Filter;

class ValidIP
{

    public function isValidIP(string $str): bool
    {
        return filter_var($str, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
    }
}