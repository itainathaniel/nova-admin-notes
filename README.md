# Nova Admin Notes

A tool for keeping thoughts, ideas and drafts within the admin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/itainathaniel/nova-admin-notes.svg?style=flat-square)](https://packagist.org/packages/itainathaniel/nova-admin-notes)
[![Total Downloads](https://img.shields.io/packagist/dt/itainathaniel/nova-admin-notes.svg?style=flat-square)](https://packagist.org/packages/itainathaniel/nova-admin-notes)


![screenshot of the notes tool](https://itainathaniel.github.io/nova-admin-notes/screenshot.png)

## Installation

Install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require itainathaniel/nova-admin-notes
```

Next, register the tool with Nova. This is done in the `tools` method of the `App\Providers\NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function tools()
{
    return [
        // ...
        new \Itainathaniel\AdminNotes\AdminNotes(),
    ];
}
```

### Security

If you discover any security related issues, please email itainathaniel@gmail.com or use the issue tracker.

## Credits

- [Itai Nathaniel](https://github.com/itainathaniel)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
