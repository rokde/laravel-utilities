<?php

namespace Rokde\LaravelUtilities\Converters;

use DateTime;

final readonly class ElapsedTimeConverter
{
    public static function convert(float $microseconds): string
    {
        DateTime::createFromFormat(
            'U.u',
            number_format($microseconds, 6, '.', '')
        )->format('H:i:s.u');
    }
}
