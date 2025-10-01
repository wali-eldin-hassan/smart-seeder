<?php

namespace Wali\SmartSeeder\Generators;

class PhoneGenerator
{
    public static function generate(): string
    {
        $prefixes = ['50', '53', '54', '55', '56', '57', '58', '59'];
        $prefix = $prefixes[array_rand($prefixes)];
        $number = '';
        for ($i = 0; $i < 7; $i++) { // only 7 digits
            $number .= rand(0, 9);
        }

        return '+966'.$prefix.$number; // total 12 digits
    }
}
