# Utilities

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
