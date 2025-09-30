<?php

namespace Wali\SmartSeeder;

use Wali\SmartSeeder\Generators\NameGenerator;
use Wali\SmartSeeder\Generators\DateGenerator;

class SmartSeeder
{
    public static function name(?string $gender = null): string
    {
        return NameGenerator::firstName($gender);
    }

    public static function fullName(?string $gender = null): string
    {
        return NameGenerator::fullName($gender);
    }


    public static function hijriDate(): string
    {
        return DateGenerator::hijriDate();
    }

    public static function gregorianDate(): string
    {
        return DateGenerator::gregorianDate();
    }
}
