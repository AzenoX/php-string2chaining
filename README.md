# php-string2chaining
Convert string containing chains into object chains

![Packagist Version](https://img.shields.io/packagist/v/AzenoX/php-string2chaining?label=Version&style=for-the-badge)
![Packagist Downloads](https://img.shields.io/packagist/dt/AzenoX/php-string2chaining?style=for-the-badge)
![GitHub](https://img.shields.io/github/license/AzenoX/php-string2chaining?style=for-the-badge)
![GitHub last commit](https://img.shields.io/github/last-commit/AzenoX/php-string2chaining?style=for-the-badge)
![Codacy coverage](https://img.shields.io/codacy/coverage/178068ebd8d146219a848e3b244ac60d?style=for-the-badge)
![Codacy grade](https://img.shields.io/codacy/grade/178068ebd8d146219a848e3b244ac60d?style=for-the-badge)
![Bitbucket open issues](https://img.shields.io/bitbucket/issues/AzenoX/php-string2chaining?style=for-the-badge)

## Installation

Via composer

```bash
composer require azenox/php-string2chaining
```

## Usage

There is only one method: **parse()**

For example when testing with PHPUnit, we can have something like this:

```php
public function setUp(): void
{
    parent::setUp();

    $this->user1 = User::find(1);
    $this->user2 = User::find(2);
}

private function userPayload()
{
    return [
        'test with user1' => [
            'user1',
            'birth_date->format(\'Y-m-d\')',
            '1998-08-22'
        ],
        'test with user2' => [
            'user2',
            'another_date->format(\'Y-m-d\')',
            '1998-03-30'
        ],
    ];
}

/**
 * @test
 * @dataProvider userPayload
 */
public function birth_date_should_be_equals_to_this_date($user, $str, $test)
{
    $obj = $this->{$user};

    $this->assertEquals($test, String2chaining::parse($obj, $str));
}
```

## Version

![Packagist Version](https://img.shields.io/packagist/v/AzenoX/php-string2chaining?label=Version&style=for-the-badge)
