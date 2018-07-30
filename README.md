# PHP Package Boilerplate [![Build Status](https://travis-ci.com/crazyfactory/php-package-boilerplate.svg)](https://travis-ci.com/crazyfactory/php-package-boilerplate)

Use this project as a starting point for PHP packages.

## Requirements
- php:  *>7.1*
- composer installed

## Startup Steps

- Clone to your localhost `git clone https://github.com/crazyfactory/php-package-boilerplate NEW_PACKAGE_NAME`
- Remove `src/Example.php` and `tests/unit/ExampleTest.php`
- Adjust `composer.json`:
  - `name`: _NEW_PACKAGE_NAME_
  - `autoload` and `autoload-dev` _NEW_PACKAGE_NAMESPACE_

- Run `composer install`
- Switch to your new remote
```bash
rm -rf .git`
git init
git add .
git commit -m "feat(All): Start"
git remote add origin <github-uri>
git push -u --force origin master
```

## Scripts

Run Tests

```bash
composer test
```

Lint

```bash
composer lint
```
