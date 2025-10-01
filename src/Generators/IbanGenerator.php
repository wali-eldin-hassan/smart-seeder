<?php

namespace Wali\SmartSeeder\Generators;

class IbanGenerator
{
    /**
     * Generate a fake Saudi IBAN (SA + 22 digits).
     */
    public static function generate(): string
    {
        $iban = 'SA';
        for ($i = 0; $i < 22; $i++) {
            $iban .= rand(0, 9);
        }

        return $iban;
    }
}
