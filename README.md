# This is my package livewire-encrypt

[![Latest Version on Packagist](https://img.shields.io/packagist/v/foxws/livewire-encrypt.svg?style=flat-square)](https://packagist.org/packages/foxws/livewire-encrypt)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/foxws/livewire-encrypt/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/foxws/livewire-encrypt/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/foxws/livewire-encrypt/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/foxws/livewire-encrypt/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/foxws/livewire-encrypt.svg?style=flat-square)](https://packagist.org/packages/foxws/livewire-encrypt)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/livewire-encrypt.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/livewire-encrypt)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require foxws/livewire-encrypt
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="livewire-encrypt-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="livewire-encrypt-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="livewire-encrypt-views"
```

## Usage

```php
$livewireEncrypt = new Foxws\LivewireEncrypt();
echo $livewireEncrypt->echoPhrase('Hello, Foxws!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Francois Menning](https://github.com/foxws)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
