<?php

namespace Wali\SmartSeeder\Generators;

class NameGenerator
{
    protected static array $maleNames = [
        'وليد', 'أحمد', 'خالد', 'محمد', 'عبدالله', 'سالم', 'فيصل', 'تركي', 'عبدالعزيز', 'مشعل',
        'بندر', 'ناصر', 'سعد', 'عمر', 'علي', 'حسام', 'يوسف', 'إبراهيم', 'عادل', 'ماجد',
        'راشد', 'طلال', 'نواف', 'سطام', 'متعب', 'عبدالرحمن', 'زياد', 'هشام', 'كريم', 'عثمان',
    ];

    protected static array $femaleNames = [
        'فاطمة', 'مريم', 'سارة', 'نورة', 'عائشة', 'خديجة', 'هند', 'لطيفة', 'منى', 'رانيا',
        'ريم', 'أمل', 'نهى', 'دانا', 'لمى', 'جود', 'رهف', 'غلا', 'شهد', 'أسماء',
        'زينب', 'رقية', 'هيفاء', 'بدرية', 'جواهر', 'عبير', 'ورود', 'نوال', 'سمية', 'هيا',
    ];

    protected static array $familyNames = [
        'الحسن', 'العتيبي', 'الأنصاري', 'القحطاني', 'آل سعود', 'الغامدي', 'الزهراني', 'الشهري', 'العمري', 'المطيري',
        'الحربي', 'الدوسري', 'الخالدي', 'البقمي', 'السبيعي', 'الجهني', 'العنزي', 'الرشيد', 'السديري', 'المالكي',
        'الفيصل', 'التميمي', 'الهذلي', 'الفهد', 'النعيمي', 'البليهي', 'الثنيان', 'الراجحي', 'السليمان', 'العبدالله',
    ];

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
