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

    /**
     * Generate a fake Saudi National ID for citizens (starts with 1).
     */
    public static function generateCitizenId(): string
    {
        $id = '1';
        for ($i = 0; $i < 9; $i++) {
            $id .= rand(0, 9);
        }

        return $id;
    }

    /**
     * Generate a fake Iqama number for residents (starts with 2).
     */
    public static function generateIqama(): string
    {
        $id = '2';
        for ($i = 0; $i < 9; $i++) {
            $id .= rand(0, 9);
        }

        return $id;
    }
}
