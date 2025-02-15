<?php

declare(strict_types=1);

namespace Psl\Type;

use function is_int as php_is_int;

/**
 * Finds whether a variable is an integer.
 *
 * @param mixed $var
 *
 * @psalm-assert-if-true int $var
 *
 * @pure
 *
 * @deprecated use `Type\int()->matches($value)` instead.
 */
function is_int($var): bool
{
    return php_is_int($var);
}
