<?php

namespace Rokde\LaravelUtilities\Converters;

final readonly class FilesizeConverter
{
    public static function convertSize(int $sizeInBytes): string
    {
        $units = [' Bytes', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB'];

        return $sizeInBytes
            ? number_format(
                round($sizeInBytes / pow(1024, ($i = floor(log($sizeInBytes, 1024)))), 2),
                2
            ).$units[$i]
            : '0 Bytes';
    }
}
