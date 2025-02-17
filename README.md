# This package connects the Xpos till system to a laravel application via the Xpos API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hello-kingofwebdesigns-co-uk/laravel-xpos.svg?style=flat-square)](https://packagist.org/packages/hello-kingofwebdesigns-co-uk/laravel-xpos)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/hello-kingofwebdesigns-co-uk/laravel-xpos/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/hello-kingofwebdesigns-co-uk/laravel-xpos/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/hello-kingofwebdesigns-co-uk/laravel-xpos/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/hello-kingofwebdesigns-co-uk/laravel-xpos/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/hello-kingofwebdesigns-co-uk/laravel-xpos.svg?style=flat-square)](https://packagist.org/packages/hello-kingofwebdesigns-co-uk/laravel-xpos)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-xpos.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-xpos)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require king-of-web-designs/laravel-xpos
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-xpos-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-xpos-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-xpos-views"
```

## Usage

```php
$laravelXpos = new KingOfWebDesigns\LaravelXpos();
echo $laravelXpos->echoPhrase('Hello, King Of Web Designs!');
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

- [Matthew King - King Of Web Designs](https://github.com/KingOfWebDesigns)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
