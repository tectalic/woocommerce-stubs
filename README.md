# WooCommerce Stubs

> Based on the [php-stubs/woocommerce-stubs](https://github.com/php-stubs/woocommerce-stubs) package. Thanks [@szepeviktor](https://github.com/szepeviktor)!

This package provides stub declarations for [WooCommerce](https://woocommerce.com/) functions, classes, and interfaces. These stubs can help plugin and theme developers leverage static analysis tools like [PHPStan](https://github.com/phpstan/phpstan), which is not able to parse WooCommerce as it is not clean OOP code.

Stubs are generated from the [`woocommerce-dist`](https://github.com/tectalic/woocommerce-dist) repo using [`php-stubs/generator`](https://github.com/php-stubs/generator).

## Dev Requirements

- PHP ^8.0

## Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev tectalic/woocommerce-stubs
```

Alternatively, you may download the `woocommerce-stubs.php` and `woocommerce-packages-stubs.php` files directly.

## Usage in PHPStan

Make PHPStan find it automatically using `phpstan/extension-installer`.

```bash
composer require --dev phpstan/extension-installer
```

Or manually include it in your `phpstan.neon`.

```yaml
parameters:
    bootstrapFiles:
        - vendor/tectalic/woocommerce-stubs/woocommerce-stubs.php
        # Optionally
        - vendor/tectalic/woocommerce-stubs/woocommerce-packages-stubs.php
```

## Generate new version

1. Make sure the new version has already been added to the [`woocommerce-dist`](https://github.com/tectalic/woocommerce-dist) repo.
2. Update [Private Packagist](https://packagist.com/orgs/tectalic/packages/3389306) if needed.
3. Run the `./generate.sh` script with the new version, e.g., `./generate.sh 7.0.0-beta.1`.
4. Update [Private Packagist](https://packagist.com/orgs/tectalic/packages/4013311) so it shows the newly generated version.
