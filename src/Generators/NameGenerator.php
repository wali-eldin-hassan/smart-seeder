<?php

namespace Wali\SmartSeeder\Generators;

class NameGenerator
{
    protected static array $maleNames = ['وليد', 'أحمد', 'خالد', 'محمد'];

    protected static array $femaleNames = ['فاطمة', 'مريم', 'سارة', 'نورة'];

    protected static array $familyNames = ['الحسن', 'العتيبي', 'الأنصاري', 'القحطاني'];

    public static function firstName(?string $gender = null): string
    {
        if ($gender === 'male') {
            return static::$maleNames[array_rand(static::$maleNames)];
        }

        if ($gender === 'female') {
            return static::$femaleNames[array_rand(static::$femaleNames)];
        }

        $all = array_merge(static::$maleNames, static::$femaleNames);

        return $all[array_rand($all)];
    }

    public static function fullName(?string $gender = null): string
    {
        return self::firstName($gender).' '.static::$familyNames[array_rand(static::$familyNames)];
    }
}
