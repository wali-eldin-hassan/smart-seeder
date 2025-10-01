# SmartSeeder 🌱

[![CI](https://github.com/wali-eldin-hassan/smart-seeder/workflows/CI/badge.svg)](https://github.com/wali-eldin-hassan/smart-seeder/actions)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![PHP Version](https://img.shields.io/badge/php-%5E8.2-blue.svg?style=flat-square)](https://php.net)

SmartSeeder is a lightweight PHP package designed to generate realistic, localized fake data for your applications. Perfect for testing, database seeding, or generating sample datasets with Arabic/Saudi-specific data.

## ✨ Features

- 🎭 **Arabic Names**: Generate random first names and full names (male/female)
- 📅 **Hijri Dates**: Generate Islamic calendar dates
- 🏦 **Saudi IBANs**: Generate valid-looking Saudi Arabian bank account numbers
- 📱 **Saudi Mobile Numbers**: Generate realistic Saudi mobile phone numbers
- 🆔 **Saudi National IDs**: Generate valid-format Saudi national identification numbers
- 🏠 **Saudi Iqama Numbers**: Generate valid-format Saudi resident ID numbers (starting with 2)
- ⚡ **Lightweight**: Minimal dependencies, fast performance
- 🔧 **Easy Integration**: Works seamlessly with PHP and Laravel projects

## 📦 Installation

Install via Composer:

```bash
composer require wali/smart-seeder
```

## 🚀 Quick Start

```php
<?php

require_once 'vendor/autoload.php';

use Wali\SmartSeeder\SmartSeeder;

// Generate a random Arabic first name
echo SmartSeeder::name(); // e.g., "أحمد"

// Generate a random Arabic full name
echo SmartSeeder::fullName(); // e.g., "فاطمة الأنصاري"

// Generate a Hijri date
echo SmartSeeder::hijriDate(); // e.g., "1445/03/15"

// Generate a Saudi IBAN
echo SmartSeeder::iban(); // e.g., "SA0380000000608010167519"

// Generate a Saudi mobile number
echo SmartSeeder::phone(); // e.g., "+966501234567"

// Generate a Saudi National ID
echo SmartSeeder::nationalId(); // e.g., "1023456789"

// Generate a Saudi Iqama (resident ID)
echo SmartSeeder::iqama(); // e.g., "2087654321"
```

## 📖 Detailed Usage

### Names

Generate Arabic names with optional gender specification:

```php
// Random name (male or female)
$name = SmartSeeder::name();

// Specific gender
$maleName = SmartSeeder::name('male');     // وليد, أحمد, خالد, محمد
$femaleName = SmartSeeder::name('female'); // فاطمة, مريم, سارة, نورة

// Full names with family names
$fullName = SmartSeeder::fullName();
$maleFullName = SmartSeeder::fullName('male');
$femaleFullName = SmartSeeder::fullName('female');
```

### Dates

Generate Hijri (Islamic) calendar dates:

```php
$hijriDate = SmartSeeder::hijriDate();
// Returns format: YYYY/MM/DD (e.g., "1445/03/15")
```

### Financial Data

Generate Saudi-specific financial identifiers:

```php
// Saudi IBAN (International Bank Account Number)
$iban = SmartSeeder::iban();
// Returns: "SA" + 22 digits (e.g., "SA0380000000608010167519")
```

### Contact Information

Generate Saudi contact details:

```php
// Saudi mobile phone number
$phone = SmartSeeder::phone();
// Returns: "+966" + 9 digits (e.g., "+966501234567")

// Saudi National ID (citizens and residents)
$nationalId = SmartSeeder::nationalId();
// Returns: 10-digit number starting with 1 or 2 (e.g., "1023456789")

// Saudi Iqama (resident ID) - specifically for non-citizens
$iqama = SmartSeeder::iqama();
// Returns: 10-digit number starting with 2 (e.g., "2087654321")
```

## 🧪 Laravel Integration

SmartSeeder works perfectly with Laravel factories and seeders:

```php
// In a Laravel Factory
use Wali\SmartSeeder\SmartSeeder;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => SmartSeeder::fullName(),
        'phone' => SmartSeeder::phone(),
        'national_id' => SmartSeeder::nationalId(),
        'iqama' => SmartSeeder::iqama(),
        'iban' => SmartSeeder::iban(),
        // ... other attributes
    ];
});

// In a Laravel Seeder
class UserSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            User::create([
                'name' => SmartSeeder::fullName(),
                'phone' => SmartSeeder::phone(),
                'national_id' => SmartSeeder::nationalId(),
            ]);
        }
    }
}
```

## 🧪 Testing

Run the test suite:

```bash
# Run all tests
composer test

# Run tests with coverage
composer test-coverage

# Or using PHPUnit directly
./vendor/bin/phpunit
```

## 📋 Requirements

- PHP 8.2 or higher
- Composer

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request. For major changes, please open an issue first to discuss what you would like to change.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 Code Quality

This package uses several tools to maintain code quality:

```bash
# Code formatting with Laravel Pint
composer format

# Check code style (without fixing)
composer format-test

# Code refactoring with Rector (dry-run)
composer refactor-dry

# Apply refactoring suggestions
composer refactor

# Run all CI checks locally
composer ci
```

## 🔒 Security

If you discover any security-related issues, please email [creaspo6@gmail.com](mailto:creaspo6@gmail.com) instead of using the issue tracker.

## 📄 License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

## 👨‍💻 Author

**Wali-Eldin Hassan**
- Email: [creaspo6@gmail.com](mailto:creaspo6@gmail.com)
- GitHub: [@wali-eldin-hassan](https://github.com/wali-eldin-hassan)

## 🙏 Acknowledgments

- Inspired by the need for localized Arabic/Saudi fake data generation

---

Made with ❤️
