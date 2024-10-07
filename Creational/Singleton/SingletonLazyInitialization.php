<?php

class SingletonLazyInitialization
{
    private static $singleton = null;
    private DateTime $date;

    protected function __construct() {
        $this->date = new \DateTime();
    }

    public static function getInstance()
    {
        if (!isset(self::$singleton)){
            self::$singleton = new SingletonLazyInitialization();
        }

        return self::$singleton;
    }
}