<?php

require __DIR__ . '/../vendor/autoload.php';

use Wali\SmartSeeder\SmartSeeder;

echo "Full Name: " . SmartSeeder::fullName('male') . PHP_EOL;
echo "Gregorian Date: " . SmartSeeder::gregorianDate() . PHP_EOL;
echo "Hijri Date: " . SmartSeeder::hijriDate() . PHP_EOL;
