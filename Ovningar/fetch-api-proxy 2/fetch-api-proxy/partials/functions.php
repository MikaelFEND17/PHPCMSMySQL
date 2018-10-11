<?php
declare(strict_types=1);

function add_numbers(int $first_number, int $second_number): int
{
    return $first_number + $second_number;
}

function pretty($array)
{
    return highlight_string("<?php\n\$data =\n" . var_export($array, true) . ";\n?>");
}
