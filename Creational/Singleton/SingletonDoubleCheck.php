<?php

class SingletonDoubleCheck
{
    private static $singleton = null;
    private DateTime $date;

    protected function __construct() {
        $this->date = new \DateTime();
    }

    public static function getInstance()
    {
        if (!isset(self::$singleton)){
            if(self::$singleton === null) {
                self::$singleton = new self();
            }
        }

        return self::$singleton;
    }
}