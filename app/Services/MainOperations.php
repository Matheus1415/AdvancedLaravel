<?php

namespace App\Services;

class MainOperations
{
    public static function generateHash($numchar = 32)
    {
        return bin2hex(random_bytes((int) $numchar / 2));
    }
}