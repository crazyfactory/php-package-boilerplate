# boilerplate

[![Build Status](https://travis-ci.org/CrazyFactory/boilerplate.svg)](https://travis-ci.org/CrazyFactory/boilerplate)

## Startup Steps

- Clone to your package directory `git clone https://github.com/crazyfactory/php-package-boilerplate my_awesome_package`
- Remove `src/Example.php` and `tests/unit/ExampleTest.php`
- Change `composer.json` name and any other config settings required for your package
- Run `composer install`
- Change your remote URL: `git remote set-url origin https://github.com/crazyfactory/REPOSITORY.git`

## Scripts

Run Tests

```bash
composer test
```

Lint

```bash
composer lint
```

Generate Docs

```bash
composer docs
```
