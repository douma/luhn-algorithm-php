<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use LuhnAlgorithm\LuhnAlgorithm;

final class LuhnAlgorithmTest extends TestCase
{
    public function test_valid(): void
    {
        $luhn = new LuhnAlgorithm();
        $this->assertTrue($luhn->isValid('4539 1488 0343 6467'));
    }

    public function test_invalid(): void
    {
        $luhn = new LuhnAlgorithm();
        $this->assertFalse($luhn->isValid('8273 1232 7352 0569'));
    }
}
