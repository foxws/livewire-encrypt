# Encrypt Livewire memo data

[![Latest Version on Packagist](https://img.shields.io/packagist/v/foxws/livewire-encrypt.svg?style=flat-square)](https://packagist.org/packages/foxws/livewire-encrypt)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/foxws/livewire-encrypt/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/foxws/livewire-encrypt/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/foxws/livewire-encrypt/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/foxws/livewire-encrypt/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/foxws/livewire-encrypt.svg?style=flat-square)](https://packagist.org/packages/foxws/livewire-encrypt)

## Description

By default Livewire exposes database connection details. See the following [discussion](https://github.com/livewire/livewire/discussions/2627) for details.

This package encrypts the `dataMeta.models` response, so your database details cannot be retrieved.

> **NOTE:** This package is a POC and comes without any warranty it actually works.

## Installation

You can install the package via composer:

```bash
composer require foxws/livewire-encrypt
```

This package should auto-register and overrule the Livewire `HydratePublicProperties` class.

### Filament

By default Livewire exposes all public properties to the view.

When using route binding, one may want to overrule the `id` attribute, to hide this from the public:

```php
protected function mutateFormDataBeforeFill(array $data): array
{
    $data['id'] = $data['prefixed_id']; // slug, uuid, ..

    return $data;
}
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
