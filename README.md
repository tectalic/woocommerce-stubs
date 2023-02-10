# WooCommerce Stubs

> Based on the [php-stubs/woocommerce-stubs](https://github.com/php-stubs/woocommerce-stubs) package. Thanks [@szepeviktor](https://github.com/szepeviktor)!

This package provides stub declarations for [WooCommerce](https://woocommerce.com/) functions, classes and interfaces.
These stubs can help plugin and theme developers leverage static analysis tools like [PHPStan](https://github.com/phpstan/phpstan), which is not able to parse WooCommerce as it is not clean OOP code.

Stubs are generated from the [`woocommerce-dist` ](https://github.com/OM4/woocommerce-dist) repo using [`php-stubs/generator`](https://github.com/php-stubs/generator).

## Requirements

- PHP >=7.2

## Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev om4/woocommerce-stubs
```

Alternatively you may download `woocommerce-stubs.php` and `woocommerce-packages-stubs.php` files directly.

## Usage in PHPStan

Include all stubs in PHPStan configuration file.

```yaml
parameters:
    bootstrapFiles:
        # Make sure you are using `php-stubs/wordpress-stubs` as well. i.e.:
        - vendor/php-stubs/wordpress-stubs/wordpress-stubs.php
        - vendor/om4/woocommerce-stubs/woocommerce-stubs.php
        # Optionally
        - vendor/om4/woocommerce-stubs/woocommerce-packages-stubs.php
```

## Generate new version

1. Make sure the new version has already been added to the [`woocommerce-dist` ](https://github.com/OM4/woocommerce-dist) repo.
2. Update [Private Packagist](https://packagist.com/orgs/om4/packages/3389306) if needed
3. Run the `./generate.sh` script with a new version. i.e., `./generate.sh 7.0.0-beta.1`
