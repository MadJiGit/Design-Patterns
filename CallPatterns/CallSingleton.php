<?php

use JetBrains\PhpStorm\NoReturn;

include_once "CallPatternAbstract.php";

class CallSingleton extends CallPatternAbstract
{
    public function __construct(string $patternType = NULL, $pattern = NULL)
    {
        parent::__construct('CREATIONAL', 'SINGLETON');
    }

    #[NoReturn] public function work(string $path)
    {

        include_once( $path . '/Creational/Singleton/SingletonLazyInitialization.php');
        $singleton1 = SingletonLazyInitialization::getInstance();
        echo '<pre>' . var_export($singleton1, true) . '</pre>';
        echo '<pre>' . var_export(new \DateTime(), true) . '</pre>';
        $singleton2 = SingletonLazyInitialization::getInstance();
        echo '<pre>' . var_export($singleton2, true) . '</pre>';
        echo '<pre>' . var_export(new \DateTime(), true) . '</pre>';
        ?>
        <div>
            <style>
                div {
                    text-align: center;
                }
            </style>
            <h3> lazy loading - double check </h3>
        </div>
        <?php

        exit();

    }
}