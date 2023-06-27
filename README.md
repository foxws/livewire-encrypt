# Encrypt Livewire memo data

[![Latest Version on Packagist](https://img.shields.io/packagist/v/foxws/livewire-encrypt.svg?style=flat-square)](https://packagist.org/packages/foxws/livewire-encrypt)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/foxws/livewire-encrypt/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/foxws/livewire-encrypt/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/foxws/livewire-encrypt/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/foxws/livewire-encrypt/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/foxws/livewire-encrypt.svg?style=flat-square)](https://packagist.org/packages/foxws/livewire-encrypt)

## Description

By default Livewire exposes database connection details. See the following [discussion](https://github.com/livewire/livewire/discussions/2627) for details.

This package encrypts `memo.dataMeta.models` and `memo.dataMeta.modelCollections` responses, so your database details cannot easily be retrieved.

> **NOTE:** This package is a POC and comes without any warranty it actually working.

## Installation

You can install the package via composer:

```bash
composer require foxws/livewire-encrypt
```

This package should auto-register and overrule the Livewire `HydratePublicProperties` class.

## Filament

> **NOTE:** By default Livewire exposes model properties to the view, unless it's defined in the model's `$hidden` property.

When using [Filament](https://filamentphp.com/), one may want to force route-binding instead, and use the following trait on the Edit/View page:

```php
<?php

namespace App\Admin\Concerns;

trait InteractsWithFormData
{
    protected function mutateFormDataBeforeFill(array $data): array
    {
        return $this->prepareFormDataBeforeFill($data);
    }

    protected function prepareFormDataBeforeFill(array $data): array
    {
        // Replace model id with route-key
        $data['id'] = $this->getRecord()->getRouteKey();

        if (array_key_exists('prefixed_id', $data)) {
            unset($data['prefixed_id']);
        }

        return $data;
    }
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
