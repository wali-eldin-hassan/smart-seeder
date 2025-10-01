<?php

namespace Wali\SmartSeeder\Generators;

class DateGenerator
{
    // Random Gregorian date in last 40 years
    public static function gregorianDate(): string
    {
        return date('Y-m-d', mt_rand(strtotime('-40 years'), time()));
    }

    // Fake Hijri date for MVP
    public static function hijriDate(): string
    {
        $year = rand(1400, 1450);
        $month = rand(1, 12);
        $day = rand(1, 29);

        return sprintf('%04d-%02d-%02d', $year, $month, $day);
    }
}
