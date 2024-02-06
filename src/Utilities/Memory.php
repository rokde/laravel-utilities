<?php

namespace Rokde\LaravelUtilities\Utilities;

use Rokde\LaravelUtilities\Converters\FilesizeConverter;

readonly class Memory
{
    public static function usage(): string
    {
        return FilesizeConverter::convertSize(memory_get_usage());
    }

    public static function peak(): string
    {
        return FilesizeConverter::convertSize(memory_get_peak_usage());
    }
}
