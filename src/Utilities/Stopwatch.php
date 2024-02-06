<?php

namespace Rokde\LaravelUtilities\Utilities;

use Rokde\LaravelUtilities\Converters\ElapsedTimeConverter;

final class Stopwatch
{
    private float $startTime = 0.0;

    private float $lastTime = 0.0;

    public function __construct()
    {
        $this->start();
    }

    public static function make(): static
    {
        return new self();
    }

    public function start(): self
    {
        $this->startTime = $this->currentTime();

        return $this;
    }

    public function measure(bool $relative = false): string
    {
        return ElapsedTimeConverter::convert($relative ? $this->elapsedRelative() : $this->elapsed());
    }

    public function takeTime(): string
    {
        return $this->measure(false);
    }

    public function elapsed(): float
    {
        return $this->currentTime() - $this->startTime;
    }

    public function elapsedRelative(): float
    {
        $lastTime = $this->lastTime;

        return $this->currentTime() - $lastTime;
    }

    public function currentTime(): float
    {
        return $this->lastTime = microtime(true);
    }
}
