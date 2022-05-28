PHP ASCII GEN
====
[![Latest Stable Version](https://poser.pugx.org/bewil19/php-ascii-gen/v)](https://packagist.org/packages/bewil19/php-ascii-gen) [![Total Downloads](https://poser.pugx.org/bewil19/php-ascii-gen/downloads)](https://packagist.org/packages/bewil19/php-ascii-gen) [![PHP Version Require](https://poser.pugx.org/bewil19/php-ascii-gen/require/php)](https://packagist.org/packages/bewil19/php-ascii-gen)


## Before you start

Before you start using this Library, you **need** to know how PHP works, you need to know the language.

## FAQ

TODO

## Getting Started

### Requirements

- PHP 8
	- We recommend PHP 8.0 as it will be the most stable and most performant.
	- x86 (32-bit) PHP requires [`ext-gmp` extension](https://www.php.net/manual/en/book.gmp.php) enabled for handling Permissions.
- Composer

### Windows and SSL

Unfortunately PHP on Windows does not have access to the Windows Certificate Store. This is an issue because TLS gets used and as such certificate verification gets applied (turning this off is **not** an option).

You will notice this issue by your script exiting immediately after one loop turn without any errors. Unfortunately there is for some reason no error or exception.

As such users of this library need to download a [Certificate Authority extract](https://curl.haxx.se/docs/caextract.html) from the cURL website.<br>
The path to the caextract must be set in the [`php.ini`](https://secure.php.net/manual/en/openssl.configuration.php) for `openssl.cafile`.

#### Recommended Extensions

- The latest PHP version.
- `ext-gmp` if using 32-bit PHP.

### Installing

Install using [Composer](https://getcomposer.org).

1. Run `composer require bewil19/php-ascii-gen`. This will install the latest release.
	- If you would like, you can also install the development branch by running `composer require bewil19/php-ascii-gen dev-master`.
2. Include the Composer autoload file at the top of your main file:
	- `include __DIR__.'/vendor/autoload.php';`

### Basic Example

```php
<?php

use AsciiGen\Ascii;

 require_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

 $text = 'Be';
 $font = 'myfont';

 $gen = new Ascii($text, $font);
```

See [examples folder](examples) for more.

## Documentation

TODO

## Contributing

We are open to contributions. However, please make sure you follow our coding standards (PSR-4 autoloading and custom styling). Please run php-cs-fixer before opening a pull request by running `composer run-script cs`.

## License

MIT License, &copy; Be Wilson and other contributers 2022-present.
