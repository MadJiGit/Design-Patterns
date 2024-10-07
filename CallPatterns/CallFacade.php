<?php

use JetBrains\PhpStorm\NoReturn;

include_once "CallPatternAbstract.php";

class CallFacade extends CallPatternAbstract
{
    public function __construct(string $patternType = NULL, $pattern = NULL)
    {
        parent::__construct('CREATIONAL', 'SINGLETON');
    }

    #[NoReturn] public function work(string $string)
    {

        exit();
    }
}