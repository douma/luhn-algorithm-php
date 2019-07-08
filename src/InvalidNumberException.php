<?php

namespace LuhnAlgorithm;

class InvalidNumberException extends \Exception
{
    public static function forNumber(string $number) : self
    {
        return new self("Invalid number " . $number);
    }
}
