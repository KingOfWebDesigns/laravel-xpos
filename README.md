# This package connects the Xpos till system to a laravel application via the Xpos API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/king-of-web-designs/laravel-xpos.svg?style=flat-square)](https://packagist.org/packages/king-of-web-designs/laravel-xpos)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/KingOfWebDesigns/laravel-xpos/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kKingOfWebDesigns/laravel-xpos/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/KingOfWebDesigns/laravel-xpos/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/KingOfWebDesigns/laravel-xpos/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/KingOfWebDesigns/laravel-xpos.svg?style=flat-square)](https://packagist.org/packages/KingOfWebDesigns/laravel-xpos)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## King Of Web Designs

[<img src="https://www.kingofwebdesigns.co.uk/storage/files/filemanager/Company/Logo/KIngOfWebDesignsLogoBorder.png" width="419px" />](https://spatie.be/github-ad-click/laravel-xpos)

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

Basic usage. Add the use statement at the top of your controller or wherever you wish to use the packge. Then call the function along with call function required (listed below) to return an array of that data.

```php
use KingOfWebDesigns\LaravelXpos\LaravelXpos;

public function useLaravelXpos()
{
   $Xpos = new LaravelXpos();

   return $Xpos->sales();

}
```

In your .env file include the variables XPOS_TEST_API_KEY and XPOS_URL. A future release will add a test mode and a live test key & url. 

Please contact XPOS directly for your shop API URL and API Key.

```php
XPOS_TEST_API_KEY="YOUR API KEY"
XPOS_URL="YOUR URL"
```

### Brands (GET)

Returns an array of the brands used by the shop.

```php
use KingOfWebDesigns\LaravelXpos\LaravelXpos;

$Xpos = new LaravelXpos();
$Xpos->brands();


```

### Groups (GET)

Returns an array for the Groups used by the shop. Groups are held in a 3 tier structure. Where ParentGroupID is null, the group is a root. It can have any number of child groups beneath it where the ParentGroupID of another group equals the GroupID of the root node. These children are linked to other groups in the same way.

Root Nodes are known as “Departments“ in Xpos cloud. Their children are “Product Groups” and the grand children are “Sub Groups”. Products are only ever linked to Sub Groups via the
GroupID property in products.

```php
use KingOfWebDesigns\LaravelXpos\LaravelXpos;

$Xpos = new LaravelXpos();
$Xpos->groups();


```
 
### Customer (GET) - requires: customerid

Returns a specific customer record based on the customer id given. Cannot access 'Internal' customers.

```php
use KingOfWebDesigns\LaravelXpos\LaravelXpos;

$customerID = '1234'; //Get your customer id here. 

$Xpos = new LaravelXpos();
$Xpos->customer($customerID);


```

### Customers (GET) - requires: page number (default = 1)

Returns an array customers in pages of 25 records. Cannot access ‘Internal’ customers.

Pass the page number and a date to return further pages and customers based on the the 'Last Adjusted Date' field. The date passed will return records before this date.

```php
use KingOfWebDesigns\LaravelXpos\LaravelXpos;

$pageNo = '1'; //Get your customer id here. 
$dateTime = '2025-02-10 11:46:37.933';

$Xpos = new LaravelXpos();
$Xpos->customers($pageNo, $dateTime);


```

### Inventory (GET) - BROKEN:TO BE FIXED - requires: page number (default = 1)

Returns an array of stock levels for matching products in the shop in pages of 25.

```php
use KingOfWebDesigns\LaravelXpos\LaravelXpos;

$pageNo = '1'; //Get your customer id here.

$Xpos = new LaravelXpos();
$Xpos->inventory($pageNo);


```

### Products (GET) - requires: page number (default = 1)

Returns an array of products stock in the shop in pages of 25.

```php
use KingOfWebDesigns\LaravelXpos\LaravelXpos;

$pageNo = '1'; //Get your customer id here.

$Xpos = new LaravelXpos();
$Xpos->products($pageNo);


```

### Sales (GET) - requires: page number (default = 1)

Returns an array of all sales since a specific date. Only returns completed sales

```php
use KingOfWebDesigns\LaravelXpos\LaravelXpos;

$pageNo = '1'; //Get your customer id here. 
$dateTime = '2025-02-10 11:46:37.933';

$Xpos = new LaravelXpos();
$Xpos->sales($pageNo, $dateTime);


```

### Staff (GET)

Returns an array of the staff in the shop.

```php
use KingOfWebDesigns\LaravelXpos\LaravelXpos;

$Xpos = new LaravelXpos();
$Xpos->staff();


```

### VatRates (GET)

Returns an array of current VAT Rates in shop.

```php
use KingOfWebDesigns\LaravelXpos\LaravelXpos;

$Xpos = new LaravelXpos();
$Xpos->vatRates();


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
