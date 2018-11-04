<?php
/**
 * @package    Phpno1\Algorithm\Calculation
 * @author     Yaha <1143990204@qq.com>
 * @link       https://blog.flyaha.top
 */

namespace Phpno1\Algorithm\Calculation;

/**
 * Class Interpreter
 *
 * @package       Phpno1\Algorithm\Calculation
 *
 * PHP实现BF解释器
 *
 * @category
 * @author        Yaha <1143990204@qq.com>
 */
class Interpreter
{

    /**
     * @param string $code
     * @param string $tape
     *
     * @return string
     */
    public function interpreter(string $code, string $tape): string
    {
        $codeArray = str_split($code);

        $temp = 0;
        for ($i = 0; $i < count($codeArray); $i++) {

            switch ($codeArray[$i]) {
                case '>':
                    $temp .= 0;
                    break;
                case '<':
                    $temp .= 10;
                    break;
                case '*':
                    $temp .= 1;
                    break;
            }
        }

        return $temp | $tape;
        //        return implode('', $tapeArray);
    }

    /**
     * @param $data
     *
     * @return array
     */
    private function add($data)
    {
        $result = [];
        foreach ($data as $key => $value) {
            $result[$key++] = $value;
        }

        return $result;
    }

    /**
     * @param $data
     *
     * @return array
     */
    private function reduce($data)
    {
        $result = [];
        foreach ($data as $key => $value) {
            $result[$key--] = $value;
        }

        return $result;
    }
}