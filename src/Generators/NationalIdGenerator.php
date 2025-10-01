<?php

namespace Wali\SmartSeeder\Generators;

class NationalIdGenerator
{
    /**
     * Generate a fake Saudi National ID.
     * Usually 10 digits, starting with 1 (citizen) or 2 (resident).
     */
    public static function generate(): string
    {
        $firstDigit = rand(1, 2); // 1 = citizen, 2 = resident
        $id = (string) $firstDigit;
        for ($i = 0; $i < 9; $i++) {
            $id .= rand(0, 9);
        }

        return $id;
    }
}
