<?php

use JetBrains\PhpStorm\NoReturn;

include_once "CallPatternAbstract.php";

class CallComposite extends CallPatternAbstract
{

    public function __construct(string $patternType = NULL, $pattern = NULL)
    {
        parent::__construct('STRUCTURAL', 'COMPOSITE');
    }

    #[NoReturn] public function work(string $path)
    {
        include_once($path . '/Structural/Composite/Circle.php');
        include_once($path . '/Structural/Composite/Square.php');
        include_once($path . '/Structural/Composite/CompositeShape.php');

        $circle = new Circle();
        $circle1 = new Circle();
        $square = new Square();
        $square1 = new Square();
//$circle->select();
//$square->select();

        $compositeShape = new CompositeShape($circle, $square);
        $compositeShape2 = new CompositeShape($circle1, $square1, $compositeShape);
        $compositeShape->select();
        echo '<pre>' . var_export($compositeShape2->isSelected(), true) . '</pre>';
        echo '<pre>' . var_export($compositeShape2, true) . '</pre>';
        $compositeShape2->select();
        $compositeShape->unSelect();

        echo '<pre>' . var_export($compositeShape2->isSelected(), true) . '</pre>';
        echo '<pre>' . var_export($compositeShape2, true) . '</pre>';
//echo '<pre>' . var_export($compositeShape->isUnselected(), true) . '</pre>';

        exit();
    }
}
?>
