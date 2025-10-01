<?php

use PHPUnit\Framework\TestCase;
use Wali\SmartSeeder\SmartSeeder;

class SmartSeederTest extends TestCase
{
    public function test_generates_name()
    {
        $name = SmartSeeder::name();
        $this->assertIsString($name);
        $this->assertNotEmpty($name);
    }

    public function test_generates_full_name()
    {
        $fullName = SmartSeeder::fullName();
        $this->assertIsString($fullName);
        $this->assertStringContainsString(' ', $fullName);
    }

    public function test_generates_hijri_date()
    {
        $date = SmartSeeder::hijriDate();
        $this->assertIsString($date);
    }

    public function test_generates_iban()
    {
        $iban = SmartSeeder::iban();
        $this->assertIsString($iban);
        $this->assertMatchesRegularExpression('/^SA[0-9]{22}$/', $iban);
    }

    public function test_generates_phone()
    {
        $phone = SmartSeeder::phone();
        $this->assertIsString($phone);
        $this->assertMatchesRegularExpression('/^\+9665[0-9]{8}$/', $phone);

    }

    public function test_generates_national_id()
    {
        $id = SmartSeeder::nationalId();
        $this->assertEquals(10, strlen($id));
        $this->assertMatchesRegularExpression('/^[12][0-9]{9}$/', $id);
    }

    public function test_generates_iqama()
    {
        $iqama = SmartSeeder::iqama();
        $this->assertEquals(10, strlen($iqama));
        $this->assertMatchesRegularExpression('/^2[0-9]{9}$/', $iqama);
        $this->assertStringStartsWith('2', $iqama);
    }
}
