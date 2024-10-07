<?php

interface CallPatternInterface
{
    public function show (string $patternType, string $pattern);
    public function work (string $path);
}