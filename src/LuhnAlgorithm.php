<?php

namespace LuhnAlgorithm;

class LuhnAlgorithm
{
    public function isValid(string $number) : bool
    {
        $stripped = str_replace(" ", "", $number);
        if(!is_numeric($stripped)) {
            throw InvalidNumberException::forNumber($stripped);
        }
        $chars = str_split($stripped,1);
        $totalChars = count($chars);
        $countIndex = $totalChars -1;
        while($countIndex >= 0) {
            if($countIndex % 2 === 0 || $countIndex === 0) {
                $number = $chars[$countIndex] * 2;
                if($number > 9) {
                    $number -= 9;
                }
                $chars[$countIndex] = $number;
            }
            $countIndex--;
        }
        return  array_sum($chars) % 10 === 0;
    }
}
