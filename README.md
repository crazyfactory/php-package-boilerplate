## PHP Package Boilerplate

Use this project as a starting point for PHP packages.

[![Build Status](https://travis-ci.com/crazyfactory/php-package-boilerplate.svg)](https://travis-ci.com/crazyfactory/php-package-boilerplate)

## Startup Steps

- Clone to your package directory `git clone https://github.com/crazyfactory/php-package-boilerplate my_awesome_package`
- Remove `src/Example.php` and `tests/unit/ExampleTest.php`
- Change `composer.json`:
  - `name`
  - `autoload` and `autoload-dev` namespacing
  - Any other config settings required for your package
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
