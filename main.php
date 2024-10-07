<?php

$type = 3;

switch ($type) {

    case 1:
        include_once(dirname(__FILE__, 1) . '/CallPatterns/CallSingleton.php');
        $singleton = new CallSingleton();
        break;
    case 2:
        include_once(dirname(__FILE__, 1) . '/CallPatterns/CallPrototype.php');
        $prototype = new CallPrototype();
        break;
    case 3:
        include_once(dirname(__FILE__, 1) . '/CallPatterns/CallBuilder.php');
        $builder = new CallBuilder();
        break;
    case 4:
        include_once (dirname(__FILE__, 1) . '/CallPatterns/CallComposite.php');
        $builder = new CallComposite();
        break;
    case 5:
        include_once (dirname(__FILE__, 1) . '/CallPatterns/CallFacade.php');
        $facade = new CallFacade();
        break;
    default:
        echo '<pre>' . var_export("Invalid choice", true) . '</pre>';
        break;
}

