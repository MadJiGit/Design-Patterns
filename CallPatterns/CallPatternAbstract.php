<?php

include_once "CallPatternInterface.php";

class CallPatternAbstract implements CallPatternInterface
{
    public function __construct(string $patternType, string $pattern)
    {
        $this->show($patternType, $pattern);
        $this->work(dirname(__FILE__, 2));

    }

    public function show(string $patternType, string $pattern)
    {
        echo "
        <div>
        <style>
        div {
        text-align: center;
        }
        </style>
            <h1> DESIGN PATTERNS </h1>
            <h2> TYPE: $patternType </h2>
            <h3> NAME: $pattern </h3>
        </div >";
    }

    public function work(string $path)
    {
        // TODO: Implement work() method.
    }
}