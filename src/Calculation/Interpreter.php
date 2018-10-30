<?php
/**
 * overviwe.
 * User: yangzuhao@zuoyebang.com
 * Date: 2018/10/30
 * Time: 23:23
 */

namespace Phpno1\Algorithm\Calculation;

class Interpreter
{

    public function interpreter(string $code, string $tape): string
    {
        $tapeArray = str_split($tape);
        $codeArray = str_split($code);

        $temp = 0;
        for ($i = 0; $i < count($codeArray); $i++) {

            switch ($codeArray[$i]) {
                case '>':
                    $temp++;
                    break;
                case '<':
                    $temp--;
                    break;
                case '*':
                    $tapeArray[$temp] = $tapeArray[$temp] === 1 ? 0 : 1;
                    break;
            }
        }


        return implode('', $tapeArray);
    }
}