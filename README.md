# Laravel UTM Urls

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


## Install

Via Composer

``` bash
$ composer require famdirksen/laravel-utm-urls
```

## Usage

Add the `\Famdirksen\LaravelUTMUrls\Middleware\SetUTMUrls::class` to your `app/Http/Kernel.php`. Thisway all the url's on your site will have the UTM attributes from the config file (`utm-urls.php`) added.

To disable the UTM attributes appended to a url on specific routes, you can add the follow middleware to the route or group: `\Famdirksen\LaravelUTMUrls\Middleware\DisableUTMUrls::class`. This will set the header `x-do-not-append-campagne` so it won't append the UTM attributes.

You can publish the config file with:

`php artisan vendor:publish --provider="Famdirksen\LaravelUTMUrls\LaravelUTMUrlsServiceProvider"`

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email info@famdirksen.nl instead of using the issue tracker.

## Credits

- [Robin Dirksen](https://github.com/robindirksen1) ([personal site](https://robindirksen.nl))
- [Famdirksen](https://famdirksen.nl)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/Famdirksen/Laravel-UTM-URLs.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Famdirksen/Laravel-UTM-URLs/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/Famdirksen/Laravel-UTM-URLs.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Famdirksen/Laravel-UTM-URLs.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/Famdirksen/Laravel-UTM-URLs.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/Famdirksen/Laravel-UTM-URLs
[link-travis]: https://travis-ci.org/Famdirksen/Laravel-UTM-URLs
[link-scrutinizer]: https://scrutinizer-ci.com/g/Famdirksen/Laravel-UTM-URLs/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/Famdirksen/Laravel-UTM-URLs
[link-downloads]: https://packagist.org/packages/Famdirksen/Laravel-UTM-URLs
