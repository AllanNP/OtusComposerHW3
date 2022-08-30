<?php

declare(strict_types=1);

namespace AllanNP\OtusComposerHw3;

final class FibonacciNumber
{
    public static function getMath(int $num): int
    {
        if ($num <= 1) {
            return $num;
        }
        return self::getMath($num - 1) + self::getMath($num - 2);
    }
}