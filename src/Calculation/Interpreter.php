<?php
/**
 * PHP实现BF解释器
 *
 * User: @yaha
 * Date: 2018/10/30
 * Time: 23:23
 */

namespace Phpno1\Algorithm\Calculation;

class Interpreter
{

    public function interpreter(string $code, string $tape): string
    {
        //        $tapeArray = str_split($tape);
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

    private function add($data)
    {
        $result = [];
        foreach ($data as $key => $value) {
            $result[$key++] = $value;
        }

        return $result;
    }

    private function reduce($data)
    {
        $result = [];
        foreach ($data as $key => $value) {
            $result[$key--] = $value;
        }

        return $result;
    }
}