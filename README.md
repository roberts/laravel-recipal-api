# Laravel Package for wrapper of ReciPal API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/roberts/laravel-recipal-api.svg?style=flat-square)](https://packagist.org/packages/roberts/laravel-recipal-api)
![Tests](https://github.com/roberts/laravel-recipal-api/workflows/Tests/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/roberts/laravel-recipal-api.svg?style=flat-square)](https://packagist.org/packages/roberts/laravel-recipal-api)

This is where your description should go.

## Installation

You can install the package via composer:

```bash
composer require roberts/laravel-recipal-api
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Roberts\LaravelRecipalApi\LaravelRecipalApiServiceProvider" --tag="laravel-recipal-api-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Drew Roberts](https://github.com/drewroberts)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
