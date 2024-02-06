# Utilities

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rokde/laravel-utilities.svg?style=flat-square)](https://packagist.org/packages/rokde/laravel-utilities)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/rokde/laravel-utilities/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/rokde/laravel-utilities/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rokde/laravel-utilities/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rokde/laravel-utilities/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rokde/laravel-utilities.svg?style=flat-square)](https://packagist.org/packages/rokde/laravel-utilities)

Some laravel or php related utilities.

    composer require rokde/laravel-utilities


## Stopwatch

A simple stopwatch to measure the time between operations.

```php
use Rokde\LaravelUtilities\Utilities\Stopwatch;

$stopwatch = Stopwatch::make();

echo $stopwatch->measure();
// do a long running task
echo $stopwatch->measure();

// displays
// 00:00:00.034240
// 00:00:03.078050
```


## Memory

Simple memory service to get peak and usage formatted.

```php
echo '[' . Memory::usage() . ' / ' . Memory::peak() . ']';

// displays
// [8.31 MB / 8.96 MB]
```
