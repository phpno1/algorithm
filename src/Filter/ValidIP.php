<?php
/**
 * @package    Phpno1\Algorithm\Filter
 * @author     Yaha <1143990204@qq.com>
 * @link       https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Filter;

/**
 * Class ValidIP
 *
 * @package       Phpno1\Algorithm\Filter
 *
 * IP验证
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class ValidIP
{

    /**
     * @param string $str
     *
     * @return bool
     */
    public function isValidIP(string $str): bool
    {
        return filter_var($str, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
    }
}