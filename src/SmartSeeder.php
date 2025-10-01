<?php

namespace Wali\SmartSeeder;

use Wali\SmartSeeder\Generators\DateGenerator;
use Wali\SmartSeeder\Generators\IbanGenerator;
use Wali\SmartSeeder\Generators\NameGenerator;
use Wali\SmartSeeder\Generators\NationalIdGenerator;
use Wali\SmartSeeder\Generators\PhoneGenerator;

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

    public static function iban(): string
    {
        return IbanGenerator::generate();
    }

    public static function phone(): string
    {
        return PhoneGenerator::generate();
    }

    public static function nationalId(): string
    {
        return NationalIdGenerator::generate();
    }

    public static function iqama(): string
    {
        return NationalIdGenerator::generateIqama();
    }
}
