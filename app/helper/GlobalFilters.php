<?php

namespace Helper;

class GlobalFilters
{
    const EXEPTIONS = [
        'send',
    ];

    public static function postFilter(): array
    {
        $result = [];
        foreach ($_POST as $key => $value) {
            if (false === array_search($key, self::EXEPTIONS)) {
                $result[$key] = $value;
            }
        }
        return $result;

    }
}