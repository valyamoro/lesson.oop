<?php
declare(strict_types=1);

namespace App\lesson27112023\V1;

class Number
{
    public function add(array $params, ?callable $closure = null): ?int
    {
        $result = null;

        foreach ($params as $key => $value) {
            if (\is_callable($closure)) {
                $result += $closure($value);
            } else {
                $result += $value;
            }
        }

        return $result;
    }

}